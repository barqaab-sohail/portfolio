<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Project;
use Filament\Forms\Form;
use App\Models\Portfolio;
use Filament\Tables\Table;
use App\Models\ProjectDetail;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProjectDetailResource\Pages;
use App\Filament\Resources\ProjectDetailResource\RelationManagers;

class ProjectDetailResource extends Resource
{
    protected static ?string $model = ProjectDetail::class;

    protected static ?string $navigationGroup = 'Projects';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('client')->required()->rules(['required']),
                Select::make('project_id')
                    ->label('Project')
                    ->options(Project::all()->pluck('short_name', 'id'))
                    ->searchable()->required()->rules(['required']),
                DatePicker::make('project_date')->required()->rules(['required'])->required()->rules(['required']),
                TextInput::make('heading')->required()->rules(['required']),
                TextInput::make('project_url'),
                RichEditor::make('introduction')->required()->rules(['required']),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('heading'),
                TextColumn::make('client'),
                TextColumn::make('project_date')->date(),
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
            'index' => Pages\ListProjectDetails::route('/'),
            'create' => Pages\CreateProjectDetail::route('/create'),
            'edit' => Pages\EditProjectDetail::route('/{record}/edit'),
        ];
    }
}
