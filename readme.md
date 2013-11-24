## About

Cashache is a small class for cacheing and compressing pages that are generated with PHP but are essentially static. After cacheing, the class will send the static version of the page rather than regenerating the content on each request. The class will also detect if the requesting agent accepts gzip encoding and send a compressed version of the file if they do.

I created Cashache as an experiment. I had been finding myself creating pages that were essentially static but still relied on PHP for generation. In these cases, a large, static, data file (JSON, PHP array, CSV) is read in processed and some non-changing output is returned. It seemed pointless to continually reporecess this data so I wanted to determine what kind of performance benefits one could get by automatically cacheing these responses.

After doing some basic testing using Apache AB, my overall conclusion is that using Cashache  provides consistently better response time and that the benefit is proportional to the amount of processing occurring and the overall document size. As the processing and document size increase, the benefit of Cashache increases. Overall however, I would say the benefits of Cashache in normal cases where PHP is not doing an exceptionally large amount of processing and/or the document isn't exceptionally, the performance benefits of Cashache are not signficant. If the docment size and/or processing for a page however is exceptionally large, Cashache can provide signficant improvements in response time. 

## Use

Put this at the very top of the page to be cached:

```PHP
require_once(dirname(__FILE__). '/cashache/cashache.php');
Cashache::cash();
```

That's it! 

If you need to clear your cache. Delete the files in `cashache/cache` and in `cashache/cache/gzip`.

## Testing

Below are the results of testing using AB. These are probably not conclusive or exhaustive. I just wanted to get a sense of how performace was affected.

### Test 1 (a million foos)

In the "oh so common" scenario when you need to print 'foo' one million times. The size of the document generated is 3MB.

```PHP
require_once('cashache/cashache.php');
Cashache::cash();

for($i = 0; $i < 1000; $i++)
{
	for($j = 0; $j < 1000; $j++)
	{
		echo 'foo';
	}
}
```

Testing 1000 requests with a maximum of 10 simultanious both with and without accepting gzip encoding.

```
ab -n 1000 -c 10 -H "Accept-Encoding: gzip,deflate" http://localhost:8888/cashache/

ab -n 1000 -c 10 http://localhost:8888/cashache/
```

Without Cashache:

```
Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        3000000 bytes

Concurrency Level:      10
Time taken for tests:   68.806 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      3000201000 bytes
HTML transferred:       3000000000 bytes
Requests per second:    14.53 [#/sec] (mean)
Time per request:       688.061 [ms] (mean)
Time per request:       68.806 [ms] (mean, across all concurrent requests)
Transfer rate:          42581.73 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    1   2.7      0      11
Processing:   330  686  80.9    668     979
Waiting:        0    7   6.0      7      58
Total:        330  687  80.8    669     979

Percentage of the requests served within a certain time (ms)
  50%    669
  66%    695
  75%    716
  80%    738
  90%    818
  95%    854
  98%    887
  99%    922
 100%    979 (longest request)
 ```

 With Cashache but not accepting gzip encoding:

```
Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        3000000 bytes

Concurrency Level:      10
Time taken for tests:   1.796 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      3000201000 bytes
HTML transferred:       3000000000 bytes
Requests per second:    556.81 [#/sec] (mean)
Time per request:       17.960 [ms] (mean)
Time per request:       1.796 [ms] (mean, across all concurrent requests)
Transfer rate:          1631377.47 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    1   0.5      1       3
Processing:     8   17   2.0     17      23
Waiting:        0    2   0.8      2       8
Total:          8   18   2.2     18      26

Percentage of the requests served within a certain time (ms)
  50%     18
  66%     19
  75%     19
  80%     19
  90%     20
  95%     22
  98%     23
  99%     23
 100%     26 (longest request)
```

With Cashache and accepting gzip encoding:

```
Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        2944 bytes

Concurrency Level:      10
Time taken for tests:   0.186 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      3191000 bytes
HTML transferred:       2944000 bytes
Requests per second:    5370.97 [#/sec] (mean)
Time per request:       1.862 [ms] (mean)
Time per request:       0.186 [ms] (mean, across all concurrent requests)
Transfer rate:          16737.09 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.3      0       1
Processing:     1    1   0.7      1       8
Waiting:        0    1   0.7      1       8
Total:          1    2   0.8      2       9

Percentage of the requests served within a certain time (ms)
  50%      2
  66%      2
  75%      2
  80%      2
  90%      2
  95%      3
  98%      3
  99%      6
 100%      9 (longest request)
 ```

### Test 2 (100 member JSON array)

 Looping through 100 member JSON array 10 times and changing a variable on each iteration then looping through and echoing three variables from each array member:

 ```PHP
 $data = json_decode(
'[
	{
	     "firstName": "John",
	     "lastName": "Smith",
	     "age": 25,
	     "address":
	     {
	         "streetAddress": "21 2nd Street",
	         "city": "New York",
	         "state": "NY",
	         "postalCode": "10021"
	     },
	     "phoneNumber":
	     [
	         {
	           "type": "home",
	           "number": "212 555-1234"
	         },
	         {
	           "type": "fax",
	           "number": "646 555-4567"
	         }
	     ]
	 }...

$new_names = array('foo', 'bar', 'baz', 'biz', 'bop', 'foo', 'bar', 'baz', 'biz', 'bop');

foreach ($new_names as $name) {
	foreach ($data as $value) {
		$value->firstName = $name;
	}
}

foreach ($data as $value) {
	echo '<p>'. $value->firstName. ' '. $value->lastName. '</p>';
	echo '<p> Lives at: '. $value->address->streetAddress. '</p>';
	echo '<p> In the city of : '. $value->address->city. '</p>';
}
```

No Cashcache:
```
Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        8000 bytes

Concurrency Level:      10
Time taken for tests:   1.246 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      8223000 bytes
HTML transferred:       8000000 bytes
Requests per second:    802.77 [#/sec] (mean)
Time per request:       12.457 [ms] (mean)
Time per request:       1.246 [ms] (mean, across all concurrent requests)
Transfer rate:          6446.44 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    1   1.6      0      10
Processing:     5   11  10.8      8     110
Waiting:        5   11  10.6      8     110
Total:          5   12  10.9     10     110

Percentage of the requests served within a certain time (ms)
  50%     10
  66%     10
  75%     12
  80%     14
  90%     21
  95%     34
  98%     55
  99%     64
 100%    110 (longest request)
Daniels-iMac:cashache danielbreczinski$
```

With Cashache but without gzip encoding:
```
Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        8000 bytes

Concurrency Level:      10
Time taken for tests:   0.195 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      8223000 bytes
HTML transferred:       8000000 bytes
Requests per second:    5119.10 [#/sec] (mean)
Time per request:       1.953 [ms] (mean)
Time per request:       0.195 [ms] (mean, across all concurrent requests)
Transfer rate:          41107.74 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.2      0       2
Processing:     1    2   0.6      2       7
Waiting:        0    1   0.6      1       7
Total:          1    2   0.6      2       8

Percentage of the requests served within a certain time (ms)
  50%      2
  66%      2
  75%      2
  80%      2
  90%      3
  95%      3
  98%      4
  99%      4
 100%      8 (longest request)
 ```

 With Cashache and with gzip encoding:
 ```
 Server Software:        Apache/2.2.22
Server Hostname:        localhost
Server Port:            8888

Document Path:          /cashache/
Document Length:        135 bytes

Concurrency Level:      10
Time taken for tests:   0.198 seconds
Complete requests:      1000
Failed requests:        0
Write errors:           0
Total transferred:      381762 bytes
HTML transferred:       135270 bytes
Requests per second:    5045.97 [#/sec] (mean)
Time per request:       1.982 [ms] (mean)
Time per request:       0.198 [ms] (mean, across all concurrent requests)
Transfer rate:          1881.21 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.3      0       2
Processing:     1    2   2.0      1      23
Waiting:        0    1   1.9      1      22
Total:          1    2   2.0      2      23

Percentage of the requests served within a certain time (ms)
  50%      2
  66%      2
  75%      2
  80%      2
  90%      2
  95%      3
  98%      4
  99%      6
 100%     23 (longest request)
 ```
