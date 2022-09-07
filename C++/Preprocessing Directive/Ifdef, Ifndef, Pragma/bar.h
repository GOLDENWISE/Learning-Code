#include "bersama.h"
//pragma merupakan kondisi dimana jika 2 library file sama - sama mendefinisikan 1 variabel yang sama
//hal tersebut dapat diatasi dengan menggunakan ifdef atau ifndef
//versi #ifdef
/*
#ifdef FOO
#else
#define FOO "ini adalah FOO dalam bar.h"
#endif
*/
//versi #ifndef
#ifndef FOO
#define FOO "ini adalah FOO dalam bar.h"
#endif



