<?php

namespace Gentor\Mautic\Facades;

use Gentor\Mautic\Api\Contacts;
use Gentor\Mautic\Api\Form;
use Illuminate\Support\Facades\Facade;
use Mautic\Api\Assets;
use Mautic\Api\CampaignEvents;
use Mautic\Api\Campaigns;
use Mautic\Api\Categories;
use Mautic\Api\Companies;
use Mautic\Api\CompanyFields;
use Mautic\Api\ContactFields;
use Mautic\Api\Data;
use Mautic\Api\Devices;
use Mautic\Api\DynamicContents;
use Mautic\Api\Emails;
use Mautic\Api\Files;
use Mautic\Api\Forms;
use Mautic\Api\Messages;
use Mautic\Api\Notes;
use Mautic\Api\Notifications;
use Mautic\Api\Pages;
use Mautic\Api\Points;
use Mautic\Api\PointTriggers;
use Mautic\Api\Reports;
use Mautic\Api\Roles;
use Mautic\Api\Segments;
use Mautic\Api\Smses;
use Mautic\Api\Stages;
use Mautic\Api\Stats;
use Mautic\Api\Users;

/**
 * Class Mautic
 *
 * @method static Assets assets()
 * @method static CampaignEvents campaignEvents()
 * @method static Campaigns campaigns()
 * @method static Categories categories()
 * @method static Companies companies()
 * @method static CompanyFields companyFields()
 * @method static ContactFields contactFields()
 * @method static Contacts contacts()
 * @method static Data data()
 * @method static Devices devices()
 * @method static DynamicContents dynamicContents()
 * @method static Emails emails()
 * @method static Files files()
 * @method static Forms forms()
 * @method static Form form($formId)
 * @method static Messages messages()
 * @method static Notes notes()
 * @method static Notifications notifications()
 * @method static Pages pages()
 * @method static Points points()
 * @method static PointTriggers pointTriggers()
 * @method static Reports reports()
 * @method static Roles roles()
 * @method static Segments segments()
 * @method static Smses smses()
 * @method static Stages stages()
 * @method static Stats stats()
 * @method static Users users()
 *
 * @package Gentor\Mautic\Facades
 * @see \Gentor\Mautic\MauticService
 */
class Mautic extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mautic';
    }
}
