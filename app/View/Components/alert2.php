<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert2 extends Component
{   
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
            $class = 'bg-blue-50 text-blue-800 dark:bg-gray-800 dark:text-blue-400';
            break;
            case 'danger':
            $class = 'bg-red-50 text-red-800 dark:bg-red-800 dark:text-red-400';
            break;
            case 'success':
            $class = 'bg-green-50 text-green-800 dark:bg-green-800 dark:text-green-400';
            break;
            case 'warning':
            $class = 'bg-yellow-50 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-400';
            break;
            case 'dark':
            $class = 'bg-gray-800 text-gray-50 dark:bg-gray-50 dark:text-gray-800';
            break;
            default:
            $class = 'bg-blue-50 text-blue-800 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
    $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
