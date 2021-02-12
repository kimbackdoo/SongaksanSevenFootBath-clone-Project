function home(){location.href="/m/index.php";} // 홈
function adm(){location.href="/adm";} //관리자
function login(){location.href="/m/bbs/login.php";} //로그인
function logout(){location.href="/m/bbs/logout.php?url=/index.php";} //로그아웃
function register(){location.href="/m/bbs/register.php";} //회원가입
function order(){location.href="/m/shop/orderinquiry.php";} //주문배송확인
function mypage(){location.href="/m/shop/mypage.php";} //마이페이지
function cart(){location.href="/m/shop/cart.php";} //장바구니
function m_it9(){window.open("http://it9.co.kr/m/bbs/board.php?bo_table=portfolio");} //아이티나인
function revision(){location.href="/m/bbs/member_confirm.php?url=register_form.php";} //회원정보수정

function guide2(){location.href="/m/pages.php?p=100_6_1_1";} //이용약관
function info2(){location.href="/m/pages.php?p=100_7_1_1";} //개인정보취급방침
function email2(){location.href="/m/pages.php?p=100_16_1_1";} //이메일무단수집거부

//function sand(){location.href="/bbs/login.php?url=..%2Fshop%2Forderinquiry.php";} //비회원배송조회

function menum(link_go) {
	switch ( link_go ) {

		//인사말
		case 'menu01-1' : //인사말
		location.href="/m/pages.php?p=1_1_1_1"; break;


		//족욕의 효능
		case 'menu02-1' ://족욕의 효능
		location.href="/m/pages.php?p=2_1_1_1"; break;
		

		//카페
		case 'menu03-1' ://카페
		location.href="/m/pages.php?p=3_1_1_1"; break;

		//이용·예약안내
		case 'menu04-1' ://이용·예약안내
		location.href="/m/pages.php?p=4_1_1_1"; break;

		//커뮤니티
		case 'menu05-1' ://공지사항
		location.href="/m/bbs/board.php?bo_table=5_1_1_1"; break;
		case 'menu05-2' ://갤러리
		location.href="/m/bbs/board.php?bo_table=5_2_1_1"; break;

		//주변관광지
		case 'menu06-1' ://주변관광지
		location.href="/m/pages.php?p=6_1_1_1"; break;
			case 'menu06-1-1' ://송악산
			location.href="/m/pages.php?p=6_1_1_1"; break;
			case 'menu06-1-2' ://산방산
			location.href="/m/pages.php?p=6_1_2_1"; break;
			case 'menu06-1-3' ://가파도
			location.href="/m/pages.php?p=6_1_3_1"; break;
			case 'menu06-1-4' ://마라도
			location.href="/m/pages.php?p=6_1_4_1"; break;
			case 'menu06-1-5' ://마라도 선착장
			location.href="/m/pages.php?p=6_1_5_1"; break;
			case 'menu06-1-6' ://형제 해안로
			location.href="/m/pages.php?p=6_1_6_1"; break;
			case 'menu06-1-7' ://올레 10코스
			location.href="/m/pages.php?p=6_1_7_1"; break;

		case 'menu06-2' ://맛집
		location.href="/m/pages.php?p=6_2_1_1"; break;
			case 'menu06-2-1' ://홍성방
			location.href="/m/pages.php?p=6_2_1_1"; break;
			case 'menu06-2-2' ://거멍국수
			location.href="/m/pages.php?p=6_2_2_1"; break;
			case 'menu06-2-3' ://산방산 횟집
			location.href="/m/pages.php?p=6_2_3_1"; break;
			case 'menu06-2-4' ://제주 기장횟집
			location.href="/m/pages.php?p=6_2_4_1"; break;
			case 'menu06-2-5' ://복태네 갈치탕
			location.href="/m/pages.php?p=6_2_5_1"; break;
			case 'menu06-2-6' ://선채향
			location.href="/m/pages.php?p=6_2_6_1"; break;
			case 'menu06-2-7' ://소라소라 감성술집
			location.href="/m/pages.php?p=6_2_7_1"; break;

		//이용약관
		case 'menu07-1' : //이용약관
		location.href="/m/pages.php?p=7_1_1_1"; break;
		case 'menu07-2' : //개인정보취급방침
		location.href="/m/pages.php?p=7_2_1_1"; break;	

		}
}
