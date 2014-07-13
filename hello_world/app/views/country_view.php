<?php
$countryList = array(62 => 'Australia',1 => 'United States');
echo Form::select('size', $countryList, '62');