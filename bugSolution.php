function foo(a, b) {
  if (a === null || b === null) {
    return 0; //or handle nulls in a more meaningful way
  }

  return a + b;
}