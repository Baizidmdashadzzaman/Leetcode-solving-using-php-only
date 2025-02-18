https://leetcode.com/problems/longest-common-prefix/
<?php
	function longestCommonPrefix($strs) {
    if (empty($strs)) return "";
    
    $prefix = $strs[0]; 
    
    for ($i = 1; $i < count($strs); $i++) {
        while (strpos($strs[$i], $prefix) !== 0) {
            $prefix = substr($prefix, 0, -1); 
            echo($prefix . "\n");
            
            if ($prefix === "") return "";
        }
    }
    
    return $prefix;
}

// Test cases
$strs1 = ["flower", "flow", "flight"];
echo longestCommonPrefix($strs1); // Output: "fl"

$strs2 = ["dog", "racecar", "car"];
echo longestCommonPrefix($strs2); // Output: ""
?>
