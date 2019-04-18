/**
*	@author
*	@date
*	@file main.cpp
*	@brief driver for LinkedList demo
*/
#include <iostream>
#include "LinkedListOfInts.h"
#include "Test.h"

int main(int argc, char** argv)
{
	LinkedListOfInts testableList;

	Test myTest;
	myTest.runTests();
	std::cout << "Running...\nAnd we're done.\nGoodbye.\n";

	return (0);

}
