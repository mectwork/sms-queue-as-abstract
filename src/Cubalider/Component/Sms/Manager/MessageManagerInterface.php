<?php

namespace Cubalider\Component\Sms\Manager;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MessageManagerInterface
{
    /**
     * Pushes given messages.
     *
     * @api
     * @param array $messages
     * @return void
     */
    public function push($messages);

    /**
     * Pops given amount of messages.
     *
     * @api
     * @param integer   $amount
     * @return mixed The messages
     */
    public function pop($amount);

    /**
     * Returns the amount of messages remaining for given bulk.
     * It returns false if bulk doest' exist
     *
     * @api
     * @param mixed $bulk
     * @return int|false
     */
    public function estimate($bulk);
}