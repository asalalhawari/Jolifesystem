<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Invoice;

use Illuminate\Auth\Access\Response;

class InvoicePolicy
{
    public function cancel(User $user, Invoice $invoice)
    {
        
            return $invoice->status === 'unpaid' && $invoice->created_at->diffInDays(now()) <= 30;
            
}
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Invoice $invoice): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Invoice $invoice): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Invoice $invoice): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Invoice $invoice): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Invoice $invoice): bool
    {
        return false;
    }
}
