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
	Test myTest;
	std::cout << "\n  |  Running...\n";
	myTest.runTests();
	std::cout << "\n  |  And we're done.\n  |  Goodbye.\n\n\n";

	return (0);
}
