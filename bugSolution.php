function foo(a, b) {
  if (a === null || b === null) {
    return null; // Handle null values appropriately
  }
  return a + b; // Perform the calculation only if both are not null
}

// Example usage:
$result1 = foo(5, 10);  // $result1 will be 15
$result2 = foo(5, null); // $result2 will be null
$result3 = foo(null, 10); // $result3 will be null

echo "Result 1: " . $result1 . "\n";
echo "Result 2: " . $result2 . "\n";
echo "Result 3: " . $result3 . "\n";