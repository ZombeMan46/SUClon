

<?php
include_once 'db.php';
function insertMemberRecord($username, $displayName, $password, $email)
{
    $passwordHash = md5($password);
    $query = "INSERT INTO uporabniki (Ime, Priimek, pass, Email) VALUES (?, ?, ?, ?)";
    $paramType = "ssss";
    $paramArray = array(
        $username,
        $displayName,
        $passwordHash,
        $email
    );
    $insertId = $this->ds->insert($query, $paramType, $paramArray);
    return $insertId;
}
?>















<!--
<?php/*
if (! empty($_POST["uporabniki"])) {
    
    $username = filter_var($_POST["Ime"], FILTER_SANITIZE_STRING);
    $priimek = filter_var($_POST["Priimek"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["Email"], FILTER_SANITIZE_STRING);
    require_once ("Member.php");



    
    $member = new Member();
    $errorMessage = $member->validateMember($username, $displayName, $password, $email);
    
    if (empty($errorMessage)) {
        $memberCount = $member->isMemberExists($username, $email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertMemberRecord($username, $displayName, $password, $email);
            if (! empty($insertId)) {
                header("Location: thankyou.php");
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
    */
}
?>
-->