<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index', [
            'users' => User::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $addressValidated = $request->validated()['address'];
        if ($user->hasAddress()) {
            $address = $user->address;
            $address->fill($addressValidated);
        } else {
            $address = new Address($addressValidated);
        }
        $user->address()->save($address);
        return redirect(route('users.index'))->with('status', __('user.user.messages.update_message_success'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): JsonResponse
    {
        if (auth()->id() !== $user->id) {
            return response()->json([
                'status' => 'error',
                'message' => __('user.user.messages.destroy_message_response')
            ], 403);
        }
    
        try {
            $user->delete();

            auth()->logout();
    
            return response()->json([
                'status' => 'success',
                'message' => __('user.user.messages.destroy_message_success'),
                'redirect' => url('/')
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => __('user.user.messages.destroy_message_error'),
            ], 500);
        }
    }    
}