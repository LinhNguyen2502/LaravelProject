<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Services\CategoryService;
class Menu extends Component
{
    public $categories = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categories = $categoryService->all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // $this->categories = [
        //     [
        //         'name' => 'Men',
        //         'slug' => 'men',
        //     ],
        //     [
        //         'name' => 'Women',
        //         'slug' => 'women',
        //     ],
        //     [
        //         'name' => 'Kid',
        //         'slug' => 'kid',
        //     ],
        //     [
        //         'name' => 'LGBT',
        //         'slug' => 'lgbt',
        //     ],
        // ];
        return view('components.menu');
    }
}
