<?php

namespace App\Orchid\Screens\CatalogManager\Book;

use App\Models\Book;
use App\Orchid\Layouts\CatalogManager\Book\BookListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BookListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'books' => Book::paginate(),
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Libros';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Todos los libros registrados';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Agregar')
                ->icon('plus')
                ->route('platform.catalog-manager.books.create'),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            BookListLayout::class,
        ];
    }
}
