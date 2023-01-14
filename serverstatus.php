<?php
/**
 *
 * Board3 Portal Server Status Module. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, Neverlands, https://online-werkstatt.at
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace neverlands\b3pserverstatus;

/**
 * Board3 Portal Server Status Module Extension base
 *
 * It is recommended to remove this file from
 * an extension if it is not going to be used.
 */

class serverstatus extends \board3\portal\modules\module_base
{
    /**
     * Allowed columns: Just sum up your options (Exp: left + right = 10)
     * top        1
     * left        2
     * center    4
     * right        8
     * bottom    16
     */
    public $columns = 10;

    /**
     * Default modulename
     */
    public $name = 'NEVERLANDS_B3P_SERVER_STATUS';

    /**
     * Default module-image:
     * file must be in "{T_THEME_PATH}/images/portal/"
     */
    public $image_src = '';

    /** @var \phpbb\config\config */
    protected $config;

    /** @var \phpbb\template\template */
    protected $template;

    /**
     * Constructor for server status module
     *
     * @param \phpbb\config\config $config phpBB config
     * @param \phpbb\template\template $template phpBB template
     */
    public function __construct($config, $template)
    {
        $this->config = $config;
        $this->template = $template;
    }

    /**
     * {@inheritdoc}
     */
    public function get_template_side($module_id)
    {
        $this->template->assign_vars(array(
        ));

        return '@neverlands_b3pserverstatus/neverlands_b3p_serverstatus_side.html';
    }

    /**
     * {@inheritdoc}
     */
    public function get_template_acp($module_id)
    {
        return array(
            'title'    => 'NEVERLANDS_B3P_SERVER_STATUS',
            'vars'    => array(
            ),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function install($module_id)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall($module_id, $db)
    {
        return true;
    }
}
