<?php

/**
 * Zikula Application Framework
 *
 * @package	XTEC SiriusXtecMailer
 * @author	Francesc Bassas i Bullich
 * @license	GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */
class SiriusXtecMailer_Version extends Zikula_AbstractVersion {

    /**
     * Load the module version information
     *
     * @author		Albert Pérez Monfort (aperezm@xtec.cat)
     * @return		The version information
     */
    public function getMetaData() {
        $meta = array();
        $meta['displayname'] = $this->__("Sirius XTEC Mailer");
        $meta['description'] = $this->__("Amplia les funcionalitats del mòdul Mailer per poder enviar correu electrònic utilitzant el servei web de la XTEC");
        $meta['url'] = $this->__("SiriusXtecMailer");
        $meta['version'] = '1.0.1';
        $meta['securityschema'] = array('SiriusXtecMailer::' => '::');

        return $meta;
    }

}
