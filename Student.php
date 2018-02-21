<?php
class Student
{
    private $_sid;
    private $_first;
    private $_last;
    private $_gpa;
    private $_birthdate;
    private $_advisor;
    /**
     * Student constructor.
     * @param $_sid
     * @param $_first
     * @param $_last
     * @param $_gpa
     * @param $_birthdate
     * @param $_advisor
     */
    public function __construct($_sid, $_first, $_last, $_gpa, $_birthdate, $_advisor)
    {
        $this->_sid = $_sid;
        $this->_first = $_first;
        $this->_last = $_last;
        $this->_gpa = $_gpa;
        $this->_birthdate = $_birthdate;
        $this->_advisor = $_advisor;
    }
    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->_sid;
    }
    /**
     * @param mixed $sid
     */
    public function setSid($sid)
    {
        $this->_sid = $sid;
    }
    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->_first;
    }
    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->_first = $first;
    }
    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->_last;
    }
    /**
     * @param mixed $last
     */
    public function setLast($last)
    {
        $this->_last = $last;
    }
    /**
     * @return mixed
     */
    public function getGpa()
    {
        return $this->_gpa;
    }
    /**
     * @param mixed $gpa
     */
    public function setGpa($gpa)
    {
        $this->_gpa = $gpa;
    }
    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->_birthdate;
    }
    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }
    /**
     * @return mixed
     */
    public function getAdvisor()
    {
        return $this->_advisor;
    }
    /**
     * @param mixed $advisor
     */
    public function setAdvisor($advisor)
    {
        $this->_advisor = $advisor;
    }
}