<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public int $menuId,
        public string $name,
        public string $image,
        public string $desc,
        public int $price
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $user = auth()->user();

        if ($user) {
            if ($user->is_admin) {
                $admin = true;
            } else {
                $admin = false;
            }
        } else {
            $admin = false;
        }
        return view('components.menu', ['admin' => $admin]);
    }
}
