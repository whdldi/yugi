<?
if ( !( COOKIE::EXISTS( 'PopToday210305' ) ) )
{

    /*
    제목 :  다크로맨스 - 노트르담의 꼽추 오류안내

게임부장 고부장! 고부장 닷컴입니다.
안녕하세요 고객님.

다크로맨스 - 노트르담의 꼽추 의 오류가 있어공지드립니다.

당사 내 PC에서는 오류가 발견되지 않아 정식 출시 되었으나,

에서 발견되어
고객님들께서 실행이 되지 않는다는 것이 인지되어
구성파일에 관련된 오류가 있음을 확인하였습니다.
빠른 시간 내에 수정보완하여 공지드리겠습니다.

이용에 불편을드려 죄송합니다.
    */
?>
<div class="modal" id="event-popup" tabindex="-1" role="dialog" style="z-index: 1049;" aria-hidden="true" >
    <div class="container">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">범 내려온다! 프리미엄게임 내려온다?!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="pop_img" width="100%" src="/sv_img/popup/popup_notice_yj_220128.jpg?nv=<?= strtotime( 'today' ); ?>" alt="팝업 이미지">
                </div>
                <div class="modal-footer">
					<a class="js-close" data-dismiss="modal" aria-label="Close" href="#">오늘 하루동안 안보기</a>
				</div>
            </div>
        </div>
    </div>
</div>
<?
}
?>
<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(){
        const time72CloseBtn = document.querySelector('#event-popup .js-close'); //210115 배너 오늘하루 안보기

        //오늘 하루동안 안보기
        if(time72CloseBtn){
            time72CloseBtn.addEventListener('click',function(){

                $.ajax({
                    type: 'POST',
                    url: '/sv_ajax/ajax_session.php',
                    data: {
                        case: 4,
                        key: 'PopToday210305',
                        value: false
                    },
                    success: function(result) {
                        // alert('B')
                    }
                });
            });
        }
    });

    // $(document).ready(function(){
    //     $('#pop_img').on('click', function(e){
    //         location.href = '/sv_service/service.php?service_tab=1&service_view=1&notix=99';
    //     });
    // });
</script>
