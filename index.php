<?php

require_once('cashache/cashache.php');
Cashache::cash();

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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },

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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 },	{
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
	 }
]');

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