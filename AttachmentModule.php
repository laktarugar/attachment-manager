<?php

class AttachmentModule extends CWebModule
{
    protected function init()
    {
        $this->import(array(
            'attachment.models.*',
            'attachment.controllers.*',
            'attachment.widgets.*',
        ));
    }

}

