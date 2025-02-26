<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ProjectImage;
use App\Models\ProjectCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectImageResource\Pages;
use App\Filament\Resources\ProjectImageResource\RelationManagers;
use App\Models\ProjectDetail;

class ProjectImageResource extends Resource
{
    protected static ?string $model = ProjectImage::class;

    protected static ?string $navigationGroup = 'Projects';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('project_detail_id')
                    ->label('Project Detail')
                    ->options(ProjectDetail::all()->pluck('heading', 'id'))
                    ->searchable()->required()->rules(['required']),
                FileUpload::make('image')->disk('public')->directory('project')->required()->rules(['required']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('projectDetail.heading'),
            ])
            ->filters([
                //
            ])
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjectImages::route('/'),
            'create' => Pages\CreateProjectImage::route('/create'),
            'edit' => Pages\EditProjectImage::route('/{record}/edit'),
        ];
    }
}
