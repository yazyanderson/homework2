const username = "alice";
const commits = 3;
const branch = "main";
const hoursAgo = 2;

// Version A: Template Literal
const message = `${username} pushed ${commits} commits to ${branch} - ${hoursAgo} hours ago.`;

console.log("Template Literal:");
console.log(message);

// Version B: String Concatenation
const message2 = username + " pushed " + commits + " commits to " + branch + " - " + hoursAgo + " hours ago.";

console.log("\nString Concatenation:");
console.log(message2);