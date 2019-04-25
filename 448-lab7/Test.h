#ifndef TEST
#define TEST

#include "LinkedListOfInts.h"


class Test
{
  public:
    void runTests();
    void empty_list_tests();
    void results();

    void non_empty_list_tests();
    bool Test_isEmpty_expect_true();
    bool Test_isEmpty_expect_false();
    bool Test_size_expect_0();
    bool Test_size_expect_2();
    bool Test_search_nonempty_expect_false();
    bool Test_search_nonempty_expect_true();
    bool Test_search_empty_expect_false();
    bool Test_addBack_adds_to_empty_list();
    bool Test_addBack_adds_to_back();
    bool Test_addFront_adds_to_empty_list();
    bool Test_addFront_adds_to_front();
    bool Test_removeBack_empty_list_expect_false();
    bool Test_removeBack_nonempty_list_expect_true();
    bool Test_removeBack_nonempty_list_removes_from_back();
    bool Test_removeFront_empty_list_expect_false();
    bool Test_removeFront_nonempty_list_expect_true();
    bool Test_removeFront_nonempty_list_removes_from_front();

  private:
    LinkedListOfInts List;
    double passedTests;
    double totalTests;

};

#endif
