<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>smu uni. wonju</title>

    <link rel="stylesheet" href="css/appFormStyle.css">

    <SCRIPT language=JavaScript>
        var maxChecked = 3;
        var totalChecked = 0;

        function CountChecked(field) {
            if (field.checked)
                totalChecked += 1;
            else
                totalChecked -= 1;

            if (totalChecked > maxChecked) {
                alert("최대 3개 까지만 가능합니다.");
                field.checked = false;
                totalChecked -= 1;
            }
        }
        function ResetCount() {
            totalChecked = 0;
        }
    </SCRIPT>
</head>
<body>
<form>
<div>
    <font size="5">
        <p id="title">세명대학교 () 원주 통학신청서</p>
    </font>
    <table class="blueTop">
        <tr>
            <th>성 명</th>
            <th>학부(과)</th>
            <th>학 번</th>
            <th>학 년</th>
            <th>연락처</th>
        </tr>
        <tr>
            <td><input type="text" name="app_name"></td>
            <td>
                <select name="app_major">
                    <option value="major_0"></option>
                    <option value="간호학과">간호학과</option>
                    <option value="경찰행정학과">경찰행정학과</option>
                    <option value="공연영상학과">공연영상학과</option>
                    <option value="광고홍보학과">광고홍보학과</option>
                    <option value="국제언어문화학부">국제언어문화학부</option>
                    <option value="기업경영학과">기업경영학과</option>
                    <option value="디자인학부">디자인학부</option>
                    <option value="디지털콘텐츠창작학과">디지털콘텐츠창작학과</option>
                    <option value="미디어문화학부">미디어문화학부</option>
                    <option value="바이오식품산업학부">바이오식품산업학부</option>
                    <option value="바이오제약산업학부">바이오제약산업학부</option>
                    <option value="바이오환경공학과">바이오환경공학과</option>
                    <option value="법학과">법학과</option>
                    <option value="보건안전공학과">보건안전공학과</option>
                    <option value="부동산학과">부동산학과</option>
                    <option value="사회복지학과">사회복지학과</option>
                    <option value="생활체육학과">생활체육학과</option>
                    <option value="소방방재학과">소방방재학과</option>
                    <option value="임상병리학과">임상병리학과</option>
                    <option value="작업치료학과">작업치료학과</option>
                    <option value="전기공학과">전기공학과</option>
                    <option value="전자상거래학과">전자상거래학과</option>
                    <option value="정보통신학부">정보통신학부</option>
                    <option value="컴퓨터학부">컴퓨터학부</option>
                    <option value="토목공학과">토목공학과</option>
                    <option value="한의예과">한의예과</option>
                    <option value="항공서비스학과">항공서비스학과</option>
                    <option value="행정학과">행정학과</option>
                    <option value="호텔관광경영학과">호텔관광경영학과</option>
                    <option value="화장품·뷰티생명공학부">화장품·뷰티생명공학부</option>
                </select>
            </td>
            <td><input type="text" name="app_class_of"></td>
            <td>
                <select name="app_grades">
                    <option value="grade_0"></option>
                    <option value="1학년">1학년</option>
                    <option value="2학년">2학년</option>
                    <option value="3학년">3학년</option>
                    <option value="4학년">4학년</option>
                </select>
            </td>
            <td><input type="text" name="app_phoneNum"></td>
        </tr>
        <tr>
            <td>통학증유형</td>
            <td colspan="2"><input type="radio" name="app_ticket" value="5일권">5일권 </td>
            <td colspan="3">
                <input type="radio" name="app_ticket" value="3일권">3일권
                <INPUT name=day value="월" onclick=CountChecked(this) type=checkbox>월
                <INPUT name=day value="화" onclick=CountChecked(this) type=checkbox>화
                <INPUT name=day value="수" onclick=CountChecked(this) type=checkbox>수
                <INPUT name=day value="목" onclick=CountChecked(this) type=checkbox>목
                <INPUT name=day value="금" onclick=CountChecked(this) type=checkbox>금


            </td>
        </tr>
        <tr>
            <td>통학증 이용기간</td>
            <td colspan="5">2019년 04년 01일(월) ~ 2019년 04월 26일(금)</td>
        </tr>
    </table>

</div>
<br />
※ 등교 운행노선 확인 후 탑승 희망 구역에 체크하시기 바랍니다.<br />
<div>
    <table class="blueTop">
        <tr>
            <td>1호차</td>
            <td>
                <select name="busStop_1">
                    <option value="busStop_1_1">태장주유소 위 민영의원 앞 버스정류장[07:50]</option>
                    <option value="busStop_1_2">옛 시외터미널 버스정류장[07:54]</option>
                    <option value="busStop_1_3">우산철교 버스정류장[07:57]</option>
                    <option value="busStop_1_4">단계사거리 버스정류장[07:58]</option>
                    <option value="busStop_1_5">종합청사 버스정류장[08:02]</option>
                    <option value="busStop_1_6">원동아파트 버스정류장[08:07]</option>
                    <option value="busStop_1_7">KBS 방송국후문[08:09]</option>
                    <option value="busStop_1_8">남부시장 버스정류장(원고방향)[08:11]</option>
                    <option value="busStop_1_9">원고 앞 버스정류장[08:13]</option>
                    <option value="busStop_1_10">단구초 버스정류장[08:20]</option>
                    <option value="busStop_1_11">학교도착[09:05]</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>2호차</td>
            <td>
                <select name="busStop_2">
                    <option value="busStop_2_1">구 무실동 동사무소앞 [08:15]</option>
                    <option value="busStop_2_2">롯데시네마 버스정류장 [08:20]</option>
                    <option value="busStop_2_3">프리미엄아울렛 버스정류장[08:22]</option>
                    <option value="busStop_2_4">단구초 버스정류장 [08:23]</option>
                    <option value="busStop_2_5">홈플러스 정류장 [08:25]</option>
                    <option value="busStop_2_6">학교도착 [09:10]</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>3호차</td>
            <td>
                <select name="busStop_3">
                    <option value="busStop_3_1">태장주유소 버스정류장 [10:00]</option>
                    <option value="busStop_3_2">옛 시외터미널 버스정류장 [10:04]</option>
                    <option value="busStop_3_3">우산철교 버스정류장 [10:07]</option>
                    <option value="busStop_3_4">단계사거리 버스정류장 [10:08]</option>
                    <option value="busStop_3_5">종합청사 버스정류장 [10:12]</option>
                    <option value="busStop_3_6">원동아파트 버스정류장 [10:17]</option>
                    <option value="busStop_3_7">KBS방송국 후문 [10:19]</option>
                    <option value="busStop_3_8">남부시장 버스정류장(원주의료원 방향) [10:21]</option>
                    <option value="busStop_3_9">롯데시네마 버스정류장 [10:26]</option>
                    <option value="busStop_3_10">프리미엄아울렛 버스정류장 [10:28]</option>
                    <option value="busStop_3_11">단구초 버스정류장 [10:30]</option>
                    <option value="busStop_3_12">홈플러스 정류장 [10:32]</option>
                    <option value="busStop_3_13">학교도착[11:15]</option>
                </select>
            </td>
        </tr>
    </table>
</div>
<br />
※ 지역 및 출발시간 확인 후 탑승 희망 차량에 체크하시기 바랍니다.<br />
<div>


    <table class="blueTop">

        <tr>
            <th colspan="7"> ■ 등교차량 </th>
            <th colspan="7"> ■ 하교차량 </th>
        </tr>
        <tr>
            <td colspan="2">등교시간</td>
            <td>월</td>
            <td>화</td>
            <td>수</td>
            <td>목</td>
            <td>금</td>
            <td colspan="2">하교시간</td>
            <td>월</td>
            <td>화</td>
            <td>수</td>
            <td>목</td>
            <td>금</td>
        </tr>
        <tr>
            <td>1호차</td>
            <td> 07:50 출발 <br>(09:05 학교도착)</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
            <td>1호차</td>
            <td>월~목 16:30 <br> 금요일 14:30</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
        </tr>
        <tr>
            <td>2호차</td>
            <td> 08:15 출발 <br> (09:10 학교 도착)</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
            <td>2호차</td>
            <td>월~목 17:30<br> 금요일 16:30</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
        </tr>
        <tr>
            <td>3호차</td>
            <td> 10:00 출발 <br> (11:15 학교 도착)</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
            <td>3호차</td>
            <td>월~목 18:40 <br> 금요일 18:40</td>
            <td><input type="checkbox" name="week" value="Mon"></td>
            <td><input type="checkbox" name="week" value="Tue"></td>
            <td><input type="checkbox" name="week" value="Wed"></td>
            <td><input type="checkbox" name="week" value="Thu"></td>
            <td><input type="checkbox" name="week" value="Fri"></td>
        </tr>


    </table>

    <table class="blueTop">
        <tr>
            <td colspan="2">개인정보 수집·이용 동의서</td>
            <td colspan="2">개인정보 제3자 제공 동의서</td>
        </tr>
        <tr>
            <td>수집·이용 목적</td>
            <td> ■ 통학생 관리 및 통학버스 운영을 위한 목적</td>
            <td>수집·이용 목적</td>
            <td> ■ 통학생 관리 및 통학버스 운영을 위한 목적</td>
        </tr>
        <tr>
            <td>제공받는 자</td>
            <td> ■ 세명대학교</td>
            <td>제공받는 자</td>
            <td> ■ 지역별 통학버스 운행업체</td>
        </tr>
        <tr>
            <td>수집항목</td>
            <td> ■ 성명, 학부(과), 학번, 학년, 연락처, 통학지역</td>
            <td>수집항목</td>
            <td> ■ 성명, 학부(과), 학번, 학년, 연락처, 통학지역</td>
        </tr>
        <tr>
            <td>보유·이용 기간</td>
            <td> 1년간</td>
            <td>보유·이용 기간</td>
            <td> 1년간</td>
        </tr>
        <tr>
            <td>
                동의를 거부할 권리 및<br />
                동의를 거부할 경우의 불이익
            </td>
            <td>
                개인정보의 수집·이용에 관한 동의를 거부할 수 있으며<br />
                거부 시 통학버스 이용 신청을 하실 수 없습니다.
            </td>
            <td>
                동의를 거부할 권리 및<br />
                동의를 거부할 경우의 불이익
            </td>
            <td>
                개인정보의 수집·이용에 관한 동의를 거부할 수 있으며<br />
                거부 시 통학버스 이용 신청을 하실 수 없습니다.
            </td>
        </tr>
        <tr>
            <td>수집·이용·제공 동의 여부</td>
            <td>위와 같이 본인의 개인정보를 수집·이용·제공 하는 것에 동의합니다.</td>
            <td>수집·이용·제공 동의 여부</td>
            <td>위와 같이 본인의 개인정보를 수집·이용·제공 하는 것에 동의합니다.</td>
        </tr>
    </table>
</div>
<br />
※ 월 등/하교 이용요금 [매월 통학증 등록 시 (소명함) 사진 1매 제출 바람. 이전 통학증에 부착된 사진 재사용 가능]
<table class="blueTop">
    <tr>
        <td colspan="6">탑승지역</td>
        <td>5일권</td>
        <td>3일권</td>
    </tr>
    <tr>
        <td colspan="6">원주</td>
        <td>68,000</td>
        <td>61,600</td>
    </tr>
</table> <br />


<p>통학버스 교통 이용 안내문</p>
1. 반드시 본인이 체크한 시간대의 차량을 이용하여야 하며, 입석 승차는 없습니다.<br />
2. 주5일권은 1학년부터 4학년까지, 주 3일권은 4학년 학생에 한하여 이용 가능하며, 지정된 통학날짜에만 이용하여야 합니다.<br />
3. 통학 중 불편 사항이 있을 시 TEL : (033) 735-8900 / 010-2598-6760 [서원관광] 으로 연락주시면 즉시 시정하겠습니다. <br />
<p>세 명 대 학 교 학 생 처 장</p> <br />
    <center>
        <button onclick="showAlert()">통학증 신청</button>
    </center>

    <script>
        function showAlert() {
            alert("통학증 신청 완료");
        }

        function check3days() {
            var values = document.getElementsByName("day"); // 체크박스객체를 담는다
            var days = '';             //체크된 체크박스의 모든 value 값을 담는다

            for (var i = 0; i < 3; i++) {
                if (values[i].checked == true) {  //체크가 되어있는 값 구분
                    days += values[i].value;
                }
            }
            alert(days);
        }
    </script>
</form>
</body>
</html>