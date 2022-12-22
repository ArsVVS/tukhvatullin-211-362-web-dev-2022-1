function pow() {
  let a, n, res;

    a = document.getElementById("num_pow1").value;
    a = parseInt(a);
    n = document.getElementById("num_pow2").value;
    n = parseInt(n);

    res = a;
    for (i = 1; i < n; i++) {
    res *= a;
    }

    document.getElementById("res_pow").innerHTML = res
}


function gcd() {
  let x, y, res;

  x = document.getElementById("num_gcd1").value;
  x = parseInt(x);
  y = document.getElementById("num_gcd2").value;
  y = parseInt(y);

  while (x != 0 && y != 0){
    if (x > y) {
        x = x % y;
    } else {
        y = y % x;
    }
  }
  res = x + y;

  document.getElementById("res_gcd").innerHTML = res
}


function minDigit(a) {
  let x, result;
  
  x = document.getElementById("num_min").value;
    
    let min = 9;
    let arr = new Array();
    arr = x.split('');
    
    for(let i = 0; i < arr.length; i++){
        if (parseInt(arr[i]) < min){
            min = arr[i];
        }
    }
    result = min;
    
    document.getElementById("res_min").innerHTML = result
}


function pluralizeRecords() {
  let res, n;

  n = document.getElementById("num_plur").value;
  n = parseInt(n);

  if (n % 10 == 1 && n % 100 != 11) {
    res = 'Была найдена ' + n + ' запись';
  } else if (n % 10 >=2 && n % 10 <= 4 && n % 100 < 12 && n % 100 > 19) {
    res = 'Было найдено ' + n + ' записи';
  } else if (((n % 10 >= 5 && n % 10 <= 9) || n % 10 == 0) || (n % 100 >= 11 && n % 100 <= 19)) {
    res = 'Было найдено ' + n + ' записей';
  }

  document.getElementById("res_plur").innerHTML = res
}


function fibb() {
  let prev = 0, next = 1, n, res;

  n = document.getElementById("num_fibb").value;
  n = parseInt(n);

  while (n > 1) {
    [prev, next] = [next, prev + next];
    n--;
  }
  res = next;

  document.getElementById("res_fibb").innerHTML = res
}