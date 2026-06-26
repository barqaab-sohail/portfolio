<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Models\Portfolio;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Main public profile content shown in the hero and About sections.
                Section::make('Profile Information')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Full Name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('job_title')
                            ->label('Job Title')
                            ->placeholder('Full Stack Web Developer')
                            ->maxLength(255),
                        DatePicker::make('date_of_birth')
                            ->label('Date of Birth')
                            ->required(),
                        TextInput::make('phone')
                            ->label('Phone / WhatsApp')
                            ->tel()
                            ->required()
                            ->maxLength(50),
                        TextInput::make('city')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('web')
                            ->label('Website URL')
                            ->url()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('degree')
                            ->placeholder('Master')
                            ->maxLength(255),
                        TextInput::make('freelance_status')
                            ->placeholder('Available')
                            ->maxLength(255),
                        RichEditor::make('introduction')
                            ->columnSpanFull()
                            ->required(),
                    ]),
                // Images are stored on the public disk and rendered by the frontend.
                Section::make('Images')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('picture')
                            ->label('Profile Picture')
                            ->imageEditor()
                            ->disk('public')
                            ->directory('picture')
                            ->rules(['image', 'mimes:jpg,jpeg,png,webp'])
                            ->required(),
                        FileUpload::make('banner')
                            ->label('Hero Banner')
                            ->imageEditor()
                            ->disk('public')
                            ->directory('banner')
                            ->rules(['image', 'mimes:jpg,jpeg,png,webp'])
                            ->required(),
                    ]),
                // Optional SEO fields override the default name/introduction metadata.
                Section::make('SEO')
                    ->columns(2)
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255),
                        TextInput::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->rows(3)
                            ->maxLength(500)
                            ->columnSpanFull(),
                    ]),
                // Filled links appear as sidebar social icons on the public site.
                Section::make('Social Links')
                    ->columns(2)
                    ->schema([
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('github_url')
                            ->label('GitHub URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('instagram_url')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('whatsapp_url')
                            ->label('WhatsApp URL')
                            ->url()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('picture')
                    ->label('Photo')
                    ->disk('public'),
                TextColumn::make('name')
                    ->label('Full Name')
                    ->searchable(),
                TextColumn::make('job_title')
                    ->searchable(),
                TextColumn::make('date_of_birth')
                    ->date(),
                TextColumn::make('email')
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
