#ifndef TEST
#define TEST

#include "LinkedListOfInts.h"


class Test
{
  public:
    void runTests();
    bool Test_isEmpty();
    bool Test_size();
    bool Test_search();
    bool Test_toVector();
    bool Test_addBack();
    bool Test_addFront();
    bool Test_removeBack();
    bool Test_removeFront();

  private:
    LinkedListOfInts List;

};

#endif
