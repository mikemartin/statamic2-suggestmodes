<?php namespace Statamic\Addons\StatesProvinces;

use Statamic\Addons\Suggest\Modes\AbstractMode;

class StatesProvincesSuggestMode extends AbstractMode
{
    public function suggestions()
    {

        $full = [
            ["value" => "Alberta", "text" => "Alberta"], 
            ["value" => "British Columbia", "text" => "British Columbia"], 
            ["value" => "Manitoba", "text" => "Manitoba"], 
            ["value" => "New Brunswick", "text" => "New Brunswick"], 
            ["value" => "Newfoundland and Labrador", "text" => "Newfoundland and Labrador"], 
            ["value" => "Northwest Territories", "text" => "Northwest Territories"], 
            ["value" => "Nova Scotia", "text" => "Nova Scotia"], 
            ["value" => "Nunavut", "text" => "Nunavut"], 
            ["value" => "Ontario", "text" => "Ontario"], 
            ["value" => "Prince Edward Island", "text" => "Prince Edward Island"], 
            ["value" => "Quebec", "text" => "Quebec"], 
            ["value" => "Saskatchewan", "text" => "Saskatchewan"], 
            ["value" => "Yukon Territory", "text" => "Yukon Territory"], 
            ["value" => "Alabama", "text" => "Alabama"], 
            ["value" => "Alaska", "text" => "Alaska"], 
            ["value" => "Arizona", "text" => "Arizona"], 
            ["value" => "Arkansas", "text" => "Arkansas"], 
            ["value" => "California", "text" => "California"], 
            ["value" => "Colorado", "text" => "Colorado"], 
            ["value" => "Connecticut", "text" => "Connecticut"], 
            ["value" => "Delaware", "text" => "Delaware"], 
            ["value" => "District of Columbia", "text" => "District of Columbia"], 
            ["value" => "Florida", "text" => "Florida"], 
            ["value" => "Georgia", "text" => "Georgia"], 
            ["value" => "Hawaii", "text" => "Hawaii"], 
            ["value" => "Idaho", "text" => "Idaho"], 
            ["value" => "Illinois", "text" => "Illinois"], 
            ["value" => "Indiana", "text" => "Indiana"], 
            ["value" => "Iowa", "text" => "Iowa"], 
            ["value" => "Kansas", "text" => "Kansas"], 
            ["value" => "Kentucky", "text" => "Kentucky"], 
            ["value" => "Louisiana", "text" => "Louisiana"], 
            ["value" => "Maine", "text" => "Maine"], 
            ["value" => "Maryland", "text" => "Maryland"], 
            ["value" => "Massachusetts", "text" => "Massachusetts"], 
            ["value" => "Michigan", "text" => "Michigan"], 
            ["value" => "Minnesota", "text" => "Minnesota"], 
            ["value" => "Mississippi", "text" => "Mississippi"], 
            ["value" => "Missouri", "text" => "Missouri"], 
            ["value" => "Montana", "text" => "Montana"], 
            ["value" => "Nebraska", "text" => "Nebraska"], 
            ["value" => "Nevada", "text" => "Nevada"], 
            ["value" => "New Hampshire", "text" => "New Hampshire"], 
            ["value" => "New Jersey", "text" => "New Jersey"], 
            ["value" => "New Mexico", "text" => "New Mexico"], 
            ["value" => "New York", "text" => "New York"], 
            ["value" => "North Carolina", "text" => "North Carolina"], 
            ["value" => "North Dakota", "text" => "North Dakota"], 
            ["value" => "Ohio", "text" => "Ohio"], 
            ["value" => "Oklahoma", "text" => "Oklahoma"], 
            ["value" => "Oregon", "text" => "Oregon"], 
            ["value" => "Pennsylvania", "text" => "Pennsylvania"], 
            ["value" => "Rhode Island", "text" => "Rhode Island"], 
            ["value" => "South Carolina", "text" => "South Carolina"], 
            ["value" => "South Dakota", "text" => "South Dakota"], 
            ["value" => "Tennessee", "text" => "Tennessee"], 
            ["value" => "Texas", "text" => "Texas"], 
            ["value" => "Utah", "text" => "Utah"], 
            ["value" => "Vermont", "text" => "Vermont"], 
            ["value" => "Virginia", "text" => "Virginia"], 
            ["value" => "Washington", "text" => "Washington"], 
            ["value" => "West Virginia", "text" => "West Virginia"], 
            ["value" => "Wisconsin", "text" => "Wisconsin"], 
            ["value" => "Wyoming", "text" => "Wyoming"]
        ];

        $abbr = [
            ["value" => "AB", "text" => "AB - Alberta"], 
            ["value" => "BC", "text" => "BC - British Columbia"], 
            ["value" => "MB", "text" => "MB - Manitoba"], 
            ["value" => "NB", "text" => "NB - New Brunswick"], 
            ["value" => "NL", "text" => "NL - Newfoundland and Labrador"], 
            ["value" => "NS", "text" => "NS - Nova Scotia"], 
            ["value" => "NT", "text" => "NT - Northwest Territories"], 
            ["value" => "NU", "text" => "NU - Nunavut"], 
            ["value" => "\"ON\"", "text" => "ON - Ontario"], 
            ["value" => "PE", "text" => "PE - Prince Edward Island"], 
            ["value" => "QC", "text" => "QC - Quebec"], 
            ["value" => "SK", "text" => "SK - Saskatchewan"], 
            ["value" => "YT", "text" => "YT - Yukon Territory"], 
            ["value" => "AL", "text" => "AL - Alabama"], 
            ["value" => "AK", "text" => "AK - Alaska"], 
            ["value" => "AZ", "text" => "AZ - Arizona"], 
            ["value" => "AR", "text" => "AR - Arkansas"], 
            ["value" => "CA", "text" => "CA - California"], 
            ["value" => "CO", "text" => "CO - Colorado"], 
            ["value" => "CT", "text" => "CT - Connecticut"], 
            ["value" => "DE", "text" => "DE - Delaware"], 
            ["value" => "DC", "text" => "DC - District of Columbia"], 
            ["value" => "FL", "text" => "FL - Florida"], 
            ["value" => "GA", "text" => "GA - Georgia"], 
            ["value" => "HI", "text" => "HI - Hawaii"], 
            ["value" => "ID", "text" => "ID - Idaho"], 
            ["value" => "IL", "text" => "IL - Illinois"], 
            ["value" => "IN", "text" => "IN - Indiana"], 
            ["value" => "IA", "text" => "IA - Iowa"], 
            ["value" => "KS", "text" => "KS - Kansas"], 
            ["value" => "KY", "text" => "KY - Kentucky"], 
            ["value" => "LA", "text" => "LA - Louisiana"], 
            ["value" => "ME", "text" => "ME - Maine"], 
            ["value" => "MD", "text" => "MD - Maryland"], 
            ["value" => "MA", "text" => "MA - Massachusetts"], 
            ["value" => "MI", "text" => "MI - Michigan"], 
            ["value" => "MN", "text" => "MN - Minnesota"], 
            ["value" => "MS", "text" => "MS - Mississippi"], 
            ["value" => "MO", "text" => "MO - Missouri"], 
            ["value" => "MT", "text" => "MT - Montana"], 
            ["value" => "NE", "text" => "NE - Nebraska"], 
            ["value" => "NV", "text" => "NV - Nevada"], 
            ["value" => "NH", "text" => "NH - New Hampshire"], 
            ["value" => "NJ", "text" => "NJ - New Jersey"], 
            ["value" => "NM", "text" => "NM - New Mexico"], 
            ["value" => "NY", "text" => "NY - New York"], 
            ["value" => "NC", "text" => "NC - North Carolina"], 
            ["value" => "ND", "text" => "ND - North Dakota"], 
            ["value" => "OH", "text" => "OH - Ohio"], 
            ["value" => "OK", "text" => "OK - Oklahoma"], 
            ["value" => "OR", "text" => "OR - Oregon"], 
            ["value" => "PA", "text" => "PA - Pennsylvania"], 
            ["value" => "RI", "text" => "RI - Rhode Island"], 
            ["value" => "SC", "text" => "SC - South Carolina"], 
            ["value" => "SD", "text" => "SD - South Dakota"], 
            ["value" => "TN", "text" => "TN - Tennessee"], 
            ["value" => "TX", "text" => "TX - Texas"], 
            ["value" => "UT", "text" => "UT - Utah"], 
            ["value" => "VT", "text" => "VT - Vermont"], 
            ["value" => "VA", "text" => "VA - Virginia"], 
            ["value" => "WA", "text" => "WA - Washington"], 
            ["value" => "WV", "text" => "WV - West Virginia"], 
            ["value" => "WI", "text" => "WI - Wisconsin"], 
            ["value" => "WY", "text" => "WY - Wyoming"]
        ];

        switch($this->request->input('param')) {
            case 'full':
                return $full;
                break;
            case 'abbr':
                return $abbr;
                break;
            default:    
                return $full;
                break;
        }

    }
}