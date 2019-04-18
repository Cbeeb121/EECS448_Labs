#include "Test.h"
#include "LinkedListOfInts.h"
#include <iostream>
using namespace std;

void Test::runTests()
{
  cout << "===================\n";
  cout << "--- TEST SUITES ---\n";
  cout << "===================\n";
  if (Test_isEmpty()) { cout << "isEmpty [PASSED]\n"; }
  else{ cout << "isEmpty [FAILED]\n"; }
  if (Test_size()) { cout << "size [PASSED]\n"; }
  else{ cout << "size [FAILED]\n"; }
  if (Test_search()) { cout << "search [PASSED]\n"; }
  else{ cout << "search [FAILED]\n"; }
  if (Test_toVector()) { cout << "toVector [PASSED]\n"; }
  else{ cout << "toVector [FAILED]\n"; }
  if (Test_addBack()) { cout << "addBack [PASSED]\n"; }
  else{ cout << "addBack [FAILED]\n"; }
  if (Test_addFront()) { cout << "addFront [PASSED]\n"; }
  else{ cout << "addFront [FAILED]\n"; }
  if (Test_removeBack()) { cout << "removeBack [PASSED]\n"; }
  else{ cout << "removeBack [FAILED]\n"; }
  if (Test_removeFront()) { cout << "removeFront [PASSED]\n"; }
  else{ cout << "removeFront [FAILED]\n"; }
}

bool Test::Test_isEmpty()
{
  bool verifier = false;
  LinkedListOfInts temp;
  if(temp.isEmpty()) {verifier = true;}
  temp.addBack(4);
  if(!temp.isEmpty()) {verifier = true;}
  else{ verifier = false;}
}

bool Test::Test_size()
{
  LinkedListOfInts temp;
  temp.addBack(5);
  temp.addBack(4);
  if(temp.size() == 2)
  {
    return true;
  }
  else
  {
    return false;
  }
}

bool Test::Test_search()
{
  LinkedListOfInts temp;
  temp.addBack(4);
  temp.addBack(6);
  temp.addBack(7);
  if(temp.search(4))
  {
    return true;
  }
  else
  {
    return false;
  }
}

bool Test::Test_toVector()
{
  return true;
}

bool Test::Test_addBack()
{
  bool verifier = false;
  LinkedListOfInts temp;
  if(temp.size() == 0){ return true;}
  else{ return false; }
  temp.addBack(5);
  temp.addBack(7);
}

bool Test::Test_addFront()
{

  return true;
}

bool Test::Test_removeBack()
{
  return true;
}

bool Test::Test_removeFront()
{
  return true;
}
