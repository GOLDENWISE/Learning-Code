//bilangan constan
//bilangan euler
const e = Math.E;
console.log(e);
//bilangan log natural (ln)
const ln10 = Math.LN10; //ln 10
console.log(ln10);
const ln2 = Math.LN2; //ln 2
console.log(ln2);
//bilangan log euler (log2e), (log10e)
const log2e = Math.LOG2E;
const log10e = Math.LOG10E;
console.log(log2e);
console.log(log10e);
//bilangan phi
const pi = Math.PI;
console.log(pi);

//Object math method(bisa diubah atau tidak constan atau bergantung dengan nilai yang diberikan)
//bilangan absolute (semua bilangan negatif dikonversi jadi positif, jika bilangan positif, tetap positif)
const abs2 = Math.abs(-2.0);
console.log(abs2);
//arc cos (cos^-1), arc sin (sin^-1), arc tan (tan^-1),
const arcCos = Math.acos(1);
console.log(arcCos);
const arcSin = Math.asin(1);
console.log(arcSin); 
const arcTan = Math.atan(1);
console.log(arcTan);
//random: mengacak bilangan dalam skala 0 hingga 1
const random = Math.random();
console.log(random);
//floor: pembulatan kebawah
const floor = Math.floor(2.5);
console.log(floor);
//ceil: pembulatan keatas
const ceil = Math.ceil(2.5);
console.log(ceil);
//round: pembulatan sesuai MTK(jika lebih kecil dari 0.5, dibulatkan kebawah, jika lebih atau sama dengan 0.5 dibulatkan keatas)
const round = Math.round(2.5);
console.log(round);
//exp: perpangkatan bilangan euler
const exp = Math.exp(2); //e^2
console.log(exp);
//log: logaritma natural dengan bilangan euler (ln x) 
const log = Math.log(3); //ln 3
console.log(log);
//max: menampilkan nilai terbesar
const max = Math.max(2,1,4,5);
console.log(max);
//min: menampilkan nilai terkecil
const min = Math.min(2,1,4,5);
console.log(min);
//pow(x,y) --> x^y
const xPangkaty = Math.pow(2, 4);
console.log(xPangkaty);
//sqrt = akar kuadrat
const akar2 = Math.sqrt(9);
console.log(akar2);
//sin, cos, tan
const sin = Math.sin(Math.PI/4);
console.log(sin);
const cos = Math.cos(Math.PI);
console.log(cos);
const tan = Math.tan (Math.PI/2);
console.log(tan); //infinity atau nilai max yang terdefinisi javascript (16331239353195370)
