<?php
class RbxAPI {

// Config
public $key = ""; // API key, get it from https://discord.gg/nYckGq7
public $base = "https://api.rbxvault.store?"; // Do not change this

// Functions begin here
// Functions that dont need username or password

public function GetUserId($username) { // Returns int
return file_get_contents($this->base."key=$this->key&method=GetUserID&username=$username");
}

public function GetUserName($userid) { // Returns string
return file_get_contents($this->base."key=$this->key&method=GetUserName&userid=$userid");
}

public function RealUser($userid) { // Returns bool
return file_get_contents($this->base."key=$this->key&method=RealUser&userid=$userid");
}

public function GetGroupFunds($groupid) { // Returns array
return file_get_contents($this->base."key=$this->key&method=GetGroupFunds&groupid=$groupid");
}

public function GetUserBlurb($userid) { // Returns string
return file_get_contents($this->base."key=$this->key&method=GetUserBlurb&userid=$userid");
}

public function GetUserStats($userid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetUserStats&userid=$userid"), true);
}

public function GetUserStatus($userid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetUserStatus&userid=$userid"), true);
}

public function GetGroupOwner($groupid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetGroupOwner&groupid=$groupid"), true);
}

public function GetGroupName($groupid) { // Returns string
return file_get_contents($this->base."key=$this->key&method=GetGroupName&groupid=$groupid");
}

public function GetGroupMembers($groupid) { // Returns string
return file_get_contents($this->base."key=$this->key&method=GetGroupMembers&groupid=$groupid");
}

public function GetGroupdescription($groupid) { // Returns string
return file_get_contents($this->base."key=$this->key&method=GetGroupdescription&groupid=$groupid");
}

public function GetGroupImg($groupid) { // Returns string/url
return file_get_contents($this->base."key=$this->key&method=GetGroupImg&groupid=$groupid");
}

public function GetGroupAllies($groupid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetGroupAllies&groupid=$groupid"), true);
}

public function GetGroupEnemies($groupid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetGroupEnemies&groupid=$groupid"), true);
}

public function GetGroupRoles($groupid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetGroupRoles&groupid=$groupid"), true);
}


// For these functions you need to login!

public function GetUserFunds($username, $password) { // Returns int
return file_get_contents($this->base."key=$this->key&method=GetUserFunds&roname=$username&ropass=$password");
}

public function ChangePassword($username, $password, $newpass) { // Returns null
return file_get_contents($this->base."key=$this->key&method=GetUserFunds&roname=$username&ropass=$password&newpass=$newpass");
}

public function SetFeeling($username, $password, $status) { // Returns null
return file_get_contents($this->base."key=$this->key&method=SetFeeling&roname=$username&ropass=$password&status=$status");
}

public function SendPM($username, $password, $to, $subject, $content) { // Returns null
return file_get_contents($this->base."key=$this->key&method=SendPM&roname=$username&ropass=$password&to=$to&subject=$subject&content=$content");
}

public function SetGroupRole($username, $password, $group, $targetUserID, $role) { // Returns null
return file_get_contents($this->base."key=$this->key&method=SetGroupRole&roname=$username&ropass=$password&group=$group&target=$targetUserID&role=$role");
}

public function GiveGroupFunds($groupid,$userid,$amount) { // Returns null
return file_get_contents($this->base."key=$this->key&method=SendPM&roname=$username&ropass=$password&group=$groupid&userid=$userid&amount=$amount");
}

public function SendTrade($username, $password, $userid, $itemid) { // Returns int
return file_get_contents($this->base."key=$this->key&method=SendTrade&roname=$username&ropass=$password&userid=$userid&itemid=$itemid");
}

public function BuyAsset($username, $password, $assetid) { // Returns null
return file_get_contents($this->base."key=$this->key&method=BuyAsset&roname=$username&ropass=$password&assetid=$assetid");
}

public function GetAsset($username, $password, $assetid) { // Returns array
return json_decode(file_get_contents($this->base."key=$this->key&method=GetAsset&roname=$username&ropass=$password&assetid=$assetid"), true);
}

public function HasAsset($username, $password, $userid, $assetid) { // Returns bool
return file_get_contents($this->base."key=$this->key&method=HasAsset&roname=$username&ropass=$password&assetid=$assetid&userid=$userid");
}

public function DelFromInv($username, $password, $assetid) { // Returns null
return file_get_contents($this->base."key=$this->key&method=DelFromInv&roname=$username&ropass=$password&assetid=$assetid");
}

}
?>
