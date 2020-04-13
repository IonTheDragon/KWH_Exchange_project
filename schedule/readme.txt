��������� ���������� ������ �����������
/schedule
GET ���������
startDate - ���� ������ ����������
endDate - ���� ����� ����������
userId - ID ������������
get_holidays - 1 - ���������� ��������� ����������, 0 - ���������� �������. �� ��������� 0.

� ������ ������ ����� json ����� status OK, shedule ��� ������� ����������, status OK, dinner, holidays, vacations, party ��� ��������� ����������, ��� shedule - ������� ������,  dinner - ���������� �����/������, holidays - ���������, vacations - ��� �������, party - ��� �����������. 
� ������ ������ - status error � ���� error � ������� ������.

������ ������� � ������:
GET http://localhost/schedule/?startDate=2018-02-20&endDate=2018-02-25&userId=5&get_holidays=0

{
"status":"ok",
"schedule":
	[
		{
			"day":"2018-02-20",
			"timeRanges":[
				{"start":"0600","end":"1300"},
				{"start":"1400","end":"1900"}
			]
		},
		{
			"day":"2018-02-21",
			"timeRanges":[
				{"start":"0600","end":"1300"},
				{"start":"1400","end":"1900"}
			]
		},
		{
			"day":"2018-02-22",
			"timeRanges":[
				{"start":"0600","end":"1300"},
				{"start":"1400","end":"1900"}
			]
		}
	]
}

GET http://localhost/schedule/?startDate=2018-02-20&endDate=2018-02-25&userId=5&get_holidays=1

{
"status":"ok",
"dinner":
	[
		{
			"day":"2018-02-20",
			"timeRanges":
			[
				{"start":"1300","end":"1400"}
			]
		},
		{
			"day":"2018-02-21",
			"timeRanges":
			[
				{"start":"1300","end":"1400"}
			]
		},
		{
			"day":"2018-02-22",
			"timeRanges":
			[
				{"start":"1300","end":"1400"}
			]
		},
		{
			"day":"2018-02-25",
			"timeRanges":
			[
				{"start":"0000","end":"2400"}
			]
		}
	],
"holidays":
	[
		"2018-02-23",
		"2018-02-24"
	],
"vacations":[],
"party":[]
}

������ �������� �� localhost ����������� xampp, � ����� htdocs. JSON ������ ���������� �������� � ������� ����� .ht.schedule.