<?php

namespace Shop\Observers;

use Shop\Models\Shop;

class ShopObserver
{
    /**
     * Listen to the ShopObserver created event.
     *
     * @param  \Shop\Models\Shop  $resource
     * @return void
     */
    public function created(Shop $resource)
    {
        // save fields
        session()->flash('title', $resource->name);
        session()->flash('message', "Shop successfully created");
        session()->flash('type', 'success');
    }

    /**
     * Listen to the ShopObserver updated event.
     *
     * @param  \Shop\Models\Shop  $resource
     * @return void
     */
    public function updated(Shop $resource)
    {
        session()->flash('title', $resource->name);
        session()->flash('message', "Shop successfully updated");
        session()->flash('type', 'success');
    }

    /**
     * Listen to the ShopObserver deleted event.
     *
     * @param  \Shop\Models\Shop  $resource
     * @return void
     */
    public function deleted(Shop $resource)
    {
        session()->flash('title', $resource->name);
        session()->flash('message', "Shop successfully removed");
        session()->flash('type', 'success');
    }

    /**
     * Listen to the ShopObserver restored event.
     *
     * @param  \Shop\Models\Shop  $resource
     * @return void
     */
    public function restored(Shop $resource)
    {
        session()->flash('title', $resource->name);
        session()->flash('message', "Shop successfully restored");
        session()->flash('type', 'success');
    }
}
