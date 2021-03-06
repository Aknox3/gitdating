<?php

/**
 * Class Member
 * A member class which contains info about a member
 * @author Ashton Knox
 * @version 1.1
 */
class Member
{
    protected $fname;
    protected $lname;
    protected $age;
    protected $gender;
    protected $phone;
    protected $email;
    protected $state;
    protected $seeking;
    protected $bio;
    protected $premium;
    protected $image;
    protected $interests = array();

    /**
     * Member constructor.
     * @param $fname
     * @param $lname
     * @param $age
     * @param $gender
     * @param $phone
     */
    function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /**
     * @return String name
     * Returns the first name of this member
     */
    function getfName()
    {
        return $this->fname;
    }

    /**
     * @param $fname
     * sets the first name of this member to the given string
     */
    function setfName($fname)
    {
        if (ctype_alnum($fname)) {
            $this->fname = $fname;
        }
        else{
            $this->fname = "InvalidFName";
        }
        }

    /**
     * @return String lname
     * returns the last name of this member
     */
    function getlName()
    {
        return $this->lname;
    }

    /**
     * @param $lname
     * sets the last name of this member to the given string
     */
    function setlName($lname)
    {
        if (ctype_alnum($lname)) {
            $this->lname = $lname;
        }
        else{
            $this->lname = "InvalidlName";
        }
    }

    /**
     * @return String
     * returns the age of this member
     */
    function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * Sets the age of this member to the given int
     */
    function setAge($age)
    {
        if ($age > 17) {
            $this->age = $age;
        }
        else{
            $this->age = 18;
        }
    }

    /**
     * @return String
     * returns the gender of this member object
     */
    function getGender()
    {
        return $this->gender;
    }

    /**
     * @param $gender
     * sets the gender of the member object to the given string
     */
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return String
     * returns the phone number of the given member
     */
    function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param $phone
     * sets the phone number of the member to the given string
     */
    function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return String
     * returns the email of the member
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     * sets the email of the member to the given string
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return String
     * returns the State of the member
     */
    function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     * sets the state of the member to the given string
     */
    function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return String
     * returns the seeking of this member object
     */
    function getSeeking()
    {
        return $this->seeking;
    }

    /**
     * @param $seeking
     * sets the seeking of this member to the given array
     */
    function setSeeking($seeking)
    {
        $this->seeking = $seeking;
    }

    /**
     * @return String
     * returns the bio of the memmber
     */
    function getBio()
    {
        return $this->bio;
    }

    /**
     * @param $bio
     * Sets the bio of the member to the given string
     */
    function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * @return 0 if user is not premium, 1 if user is premium
     */
    function getPremium()
    {
        return $this->premium;
    }

    /**
     * @param $premium
     * Sets the premium status of this member. Used mainly for database and admin viewing
     */
    function setPremium($premium)
    {
        $this->premium = $premium;
    }

    /**
     * @return array interests
     * will return the interests array, if any
     */
    function getInterests()
    {
        return $this->interests;
    }

    /**
     * @param $interests
     * will set the interests array to the input array
     */
    function setInterests($interests)
    {
        $this->interests = $interests;
    }

    /**
     * @return mixed
     * returns the path of the image associated with this member (not supported)
     */
    function getImage()
    {
        return $this->image;
    }

    /**
     * @param $image
     * sets the path of the image associated with this member (not supported)
     */
    function setImage($image)
    {
        $this->image = $image;
    }
}