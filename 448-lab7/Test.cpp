#include "Test.h"
#include "LinkedListOfInts.h"
#include <iostream>
using namespace std;

void Test::runTests()
{
  cout << "\n  ==================\n";
  cout << "  --- TEST SUITE ---";
  cout << "\n  ==================\n\n";

  passedTests = 0;
  totalTests = 0;

  empty_list_tests();
  non_empty_list_tests();
  results();
}

void Test::empty_list_tests()
{

  cout << "  |  Empty List Tests" << endl;
  cout << "  -------------------------------" << endl;

  cout << "  |  isEmpty should return true: ";
  totalTests++;
  if(Test_isEmpty_expect_true())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  size should return 0: ";
  totalTests++;
  if(Test_size_expect_0())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  search should return false: ";
  totalTests++;
  if(!Test_search_empty_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  addBack should add to a list: ";
  totalTests++;
  if(Test_addBack_adds_to_empty_list())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  addFront should add to a list: ";
  totalTests++;
  if(Test_addFront_adds_to_empty_list())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeBack should return false: ";
  totalTests++;
  if(Test_removeBack_empty_list_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeBack should return false: ";
  totalTests++;
  if(Test_removeBack_empty_list_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeFront should return false: ";
  totalTests++;
  if(Test_removeFront_empty_list_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}
}

void Test::non_empty_list_tests()
{
  cout << "\n\n  |  Non Empty List Tests" << endl;
  cout << "  -------------------------------" << endl;

  cout << "  |  isEmpty should return false: ";
  totalTests++;
  if(!Test_isEmpty_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  size should return 2 with two elements in list: ";
  totalTests++;
  if(Test_size_expect_2())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  search should return false if searched value is not in list: ";
  totalTests++;
  if(!Test_search_nonempty_expect_false())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  search should return true if searched value is in list: ";
  totalTests++;
  if(Test_search_nonempty_expect_true())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  addBack should add to back of list: ";
  totalTests++;
  if(Test_addBack_adds_to_back())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  addFront should add to front of the list: ";
  totalTests++;
  if(Test_addFront_adds_to_front())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeBack should remove an element from a list: ";
  totalTests++;
  if(Test_removeBack_nonempty_list_expect_true())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeBack should remove element from back of the list: ";
  totalTests++;
  if(Test_removeBack_nonempty_list_removes_from_back())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeFront should remove an element from a list: ";
  totalTests++;
  if(Test_removeFront_nonempty_list_expect_true())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}

  cout << "  |  removeFront should remove element from front of the list: ";
  totalTests++;
  if(Test_removeFront_nonempty_list_removes_from_front())
  {cout << "[PASSED]\n"; passedTests++;}
  else
  {cout << "[FAILED]\n";}
}

void Test::results()
{
  cout << "\n  -------------------------------\n" << endl;
  cout << "  |  Tests have completed." << endl;
  double success_percentage = passedTests / totalTests;
  cout << "\n  -------------------------------\n" << endl;
  cout << "  |  ";
  for(int i=0; i<passedTests; i++){ cout << "+";}
  for (int i = 0; i < totalTests-passedTests; i++) {cout << "-";}
  cout << endl;
  cout << endl;
  cout << "  |  " << passedTests << " out of " << totalTests << " passed successfully.\n" << endl;
  cout << "  |  " << success_percentage*100 << "% of tests passed\n";
}

bool Test::Test_addBack_adds_to_empty_list()
{
  LinkedListOfInts temp;
  temp.addBack(4);
  return(temp.toVector().at(0) == 4);
}

bool Test::Test_addBack_adds_to_back()
{
  LinkedListOfInts temp;
  temp.addBack(4);
  temp.addBack(5);
  return(temp.toVector().at(1) == 5);
}

bool Test::Test_isEmpty_expect_true()
{
  LinkedListOfInts temp;
  return (temp.isEmpty());
}

bool Test::Test_isEmpty_expect_false()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  return (temp.isEmpty());
}

bool Test::Test_size_expect_0()
{
  LinkedListOfInts temp;
  if(temp.size() == 0)
  {
    return true;
  }
  else
  {
    return false;
  }
}

bool Test::Test_size_expect_2()
{
  LinkedListOfInts temp;
  temp.addFront(4);
  temp.addFront(5);
  if(temp.size() == 2)
  {
    return true;
  }
  else
  {
    return false;
  }
}

bool Test::Test_search_nonempty_expect_true()
{
  LinkedListOfInts temp;
  temp.addBack(4);
  temp.addBack(6);
  return (temp.search(6));
}

bool Test::Test_search_nonempty_expect_false()
{
  LinkedListOfInts temp;
  temp.addBack(4);
  temp.addBack(6);
  return(temp.search(5));
}

bool Test::Test_search_empty_expect_false()
{
  LinkedListOfInts temp;
  return(temp.search(6));
}

bool Test::Test_addFront_adds_to_empty_list()
{
  LinkedListOfInts temp;
  temp.addFront(4);
  return(temp.toVector().at(0) == 4);
}

bool Test::Test_addFront_adds_to_front()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  temp.addFront(3);
  return(temp.toVector().at(0) == 3);
}

bool Test::Test_removeBack_empty_list_expect_false()
{
  LinkedListOfInts temp;
  return(temp.removeBack());
}

bool Test::Test_removeBack_nonempty_list_expect_true()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  temp.addFront(6);
  temp.removeBack();
  if((temp.size() == 1) && temp.toVector().at(0) == 6){return true;}
  else{return false;}
}

bool Test::Test_removeBack_nonempty_list_removes_from_back()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  temp.addFront(6);
  temp.addFront(8);
  temp.removeBack();
  return((temp.size() == 2) && (temp.toVector().at(1) == 6));
}

bool Test::Test_removeFront_empty_list_expect_false()
{
  LinkedListOfInts temp;
  return(temp.removeFront());
}

bool Test::Test_removeFront_nonempty_list_expect_true()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  temp.addFront(6);
  temp.removeFront();
  if((temp.size() == 1) && (temp.toVector().at(0) == 5)){return true;}
  else{return false;}
}

bool Test::Test_removeFront_nonempty_list_removes_from_front()
{
  LinkedListOfInts temp;
  temp.addFront(5);
  temp.addFront(6);
  temp.addFront(8);
  temp.removeFront();
  return((temp.size() == 2) && (temp.toVector().at(0) == 6));
}
