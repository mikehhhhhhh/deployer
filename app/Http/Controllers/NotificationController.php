<?php namespace App\Http\Controllers;

use App\Notification;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationRequest;

/**
 * Controller for managing notifications
 */
class NotificationController extends Controller
{
    /**
     * Store a newly created notification in storage.
     *
     * @param StoreNotificationRequest $request
     * @return Response
     */
    public function store(StoreNotificationRequest $request)
    {
        return Notification::create($request->only(
            'name',
            'channel',
            'webhook',
            'project_id'
        ));
    }

    /**
     * Update the specified notification in storage.
     *
     * @param Notification $notification
     * @param StoreNotificationRequest $request
     * @return Response
     */
    public function update(Notification $notification, StoreNotificationRequest $request)
    {
        $notification->update($request->only(
            'name',
            'channel',
            'webhook',
            'project_id'
        ));

        return $notification;
    }

    /**
     * Remove the specified notification from storage.
     *
     * @param Notification $notification
     * @return Response
     */
    public function destroy(Notification $notification)
    {
        $notification->delete();

        return [
            'success' => true
        ];
    }
}
