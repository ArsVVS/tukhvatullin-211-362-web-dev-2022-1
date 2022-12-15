function pow(a, n) {
  let res = 1;

  for (i = 0; i < n; i++) {
    res *= a;
  }

  return res;
}

console.log(pow(5, 2));


function gcd(x, y) {
  if (y > x) return gcd(y, x);
  if (!y) return x;
  return gcd(y, x % y);
}

console.log(gcd(104, 200));

function minDigit(a) {
  const arr = a.toString().split('');

  for (i = 0; i < arr.length; i++) {
    arr[i] = Number(arr[i]);
  }

  return Math.min(...arr);
}

console.log(minDigit(8937));

function pluralizeRecords(n) {
  let start, end;

  if (n % 10 == 1 && n % 100 != 11) {
    start = 'Была найдена ';
    end = ' запись';
  } else if (n % 10 >=2 && n % 10 <= 4 && n % 100 < 12 && n % 100 > 19) {
    start = 'Было найдено ';
    end = ' записи';
  } else if (((n % 10 >= 5 && n % 10 <= 9) || n % 10 == 0) || (n % 100 >= 11 && n % 100 <= 19)) {
    start = 'Было найдено ';
    end = ' записей';
  }

  return start + n + end;
}

console.log(pluralizeRecords(0));

function fibb(n) {
  let prev = 0, next = 1;

  while (n > 1) {
    [prev, next] = [next, prev + next];
    n--;
  }

  return next;
}

console.log(fibb(52));
