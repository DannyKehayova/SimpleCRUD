<?php


namespace Models;


class IndexViewData
{





    private $formData = [];


    /**
     * @return array
     */
    public function getFormData()
    {
        return $this->formData;
    }

    /**
     * @param array $formData
     */
    public function setFormData(array $formData)
    {
        $this->formData = $formData;
    }



}