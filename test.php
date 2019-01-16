<?php


class Ship
{
    private $name;

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strength = 0;

    private $underRepair;

    /**
     * @return bool
     */
    public function isUnderRepair(): bool
    {
        return $this->underRepair;
    }

    /**
     * @param bool $underRepair
     */
    public function setUnderRepair(bool $underRepair): void
    {
        $this->underRepair = $underRepair;
    }

//    public function __construct($name)
//    {
//        $this->name = $name;
//        // randomly put this ship under repair
//        $this->underRepair = mt_rand(1, 100) < 30;
//    }

    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function sayHello()
    {
        echo 'Hello!';
    }

    public function getName()
    {
        return $this->name;
    }

    public function setStrength($number)
    {
        if (!is_numeric($number)) {
            throw new \Exception('Strength must be a number, duh!');
        }

        $this->strength = $number;
    }

    public function getStrength()
    {
        return $this->strength;
    }

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
}


function get_ships()
{
    $ships = array();

    $ship1 = new Ship();
    $ship1->name = 'Jedi Starfighter';
    $ship1->weaponPower = 5;
    $ship1->jediFactor = 15;
    $ship1->strength = 30;
    $ships['starfighter'] = $ship1;


    $ship2 = new Ship();


    return $ships;

    /*
         return array(
        'starfighter' => array(
            'name' => 'Jedi Starfighter',
            'weapon_power' => 5,
            'jedi_factor' => 15,
            'strength' => 30,
        ),
        'cloakshape_fighter' => array(
            'name' => 'CloakShape Fighter',
            'weapon_power' => 2,
            'jedi_factor' => 2,
            'strength' => 70,
        ),
        'super_star_destroyer' => array(
            'name' => 'Super Star Destroyer',
            'weapon_power' => 70,
            'jedi_factor' => 0,
            'strength' => 500,
        ),
        'rz1_a_wing_interceptor' => array(
            'name' => 'RZ-1 A-wing interceptor',
            'weapon_power' => 4,
            'jedi_factor' => 4,
            'strength' => 50,
        ),
    );*/

}


var_dump(get_ships());
