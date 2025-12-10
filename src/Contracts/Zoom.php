<?php

namespace MacsiDigital\Zoom\Contracts;


use MacsiDigital\Zoom\EventSubscription;
use MacsiDigital\Zoom\Manifest;
use MacsiDigital\Zoom\MarketPlaceApp;
use MacsiDigital\Zoom\Meeting;
use MacsiDigital\Zoom\Recording;
use MacsiDigital\Zoom\Role;
use MacsiDigital\Zoom\User;
use MacsiDigital\Zoom\Webinar;

interface Zoom
{
    /**
     * @return User
     */
    public function user(): User;

    /**
     * @return Meeting
     */
    public function meeting(): Meeting;

    /**
     * @return Webinar
     */
    public function webinar(): Webinar;

    /**
     * @return Recording
     */
    public function recording(): Recording;

    /**
     * @return Role
     */
    public function role(): Role;

    /**
     * @return MarketPlaceApp
     */
    public function marketPlaceApp() : MarketPlaceApp;

    /**
     * @return Manifest
     */
    public function manifest(): Manifest;

    /**
     * @return EventSubscription
     */
    public function eventSubscription(): EventSubscription;
}
