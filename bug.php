function foo(a, b) {
  if (a === null || b === null) {
    return null; //this will cause the bug, since it only checks if one is null
  }

  return a + b;
}