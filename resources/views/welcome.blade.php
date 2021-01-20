<!DOCTYPE html>
<html lang="EN">
 <head>
  <title>Chess on PHP</title>
  <meta charset="UTF-8">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
 </head>
 <body>

 <div class="box">
  <div class="centered">
  <table class="chess-board">
   <tbody>
    <tr>
     <th></th>
     <th>a</th>
     <th>b</th>
     <th>c</th>
     <th>d</th>
     <th>e</th>
     <th>f</th>
     <th>g</th>
     <th>h</th>
     <th rowspan=9>
        King: {{ $king->x }}, {{ $king->y }} <br />
        Queen: {{ $queen->x }}, {{ $queen->y }}
     </th>
    </tr>
    <tr>
     <th>8</th>
     <td class="white" id="a8" data-x="8" data-y="1"></td>
     <td class="black" id="b8" data-x="8" data-y="2"></td>
     <td class="white" id="c8" data-x="8" data-y="3"></td>
     <td class="black" id="d8" data-x="8" data-y="4"></td>
     <td class="white" id="e8" data-x="8" data-y="5"></td>
     <td class="black" id="f8" data-x="8" data-y="6"></td>
     <td class="white" id="g8" data-x="8" data-y="7"></td>
     <td class="black" id="h8" data-x="8" data-y="8"></td>
    </tr>
    <tr>
     <th>7</th>
     <td class="black" id="a7" data-x="7" data-y="1"></td>
     <td class="white" id="b7" data-x="7" data-y="2"></td>
     <td class="black" id="c7" data-x="7" data-y="3"></td>
     <td class="white" id="d7" data-x="7" data-y="4"></td>
     <td class="black" id="e7" data-x="7" data-y="5"></td>
     <td class="white" id="f7" data-x="7" data-y="6"></td>
     <td class="black" id="g7" data-x="7" data-y="7"></td>
     <td class="white" id="h7" data-x="7" data-y="8"></td>
    </tr>
    <tr>
     <th>6</th>
     <td class="white" id="a6" data-x="6" data-y="1"></td>
     <td class="black" id="b6" data-x="6" data-y="2"></td>
     <td class="white" id="c6" data-x="6" data-y="3"></td>
     <td class="black" id="d6" data-x="6" data-y="4"></td>
     <td class="white" id="e6" data-x="6" data-y="5"></td>
     <td class="black" id="f6" data-x="6" data-y="6"></td>
     <td class="white" id="g6" data-x="6" data-y="7"></td>
     <td class="black" id="h6" data-x="6" data-y="8"></td>
    </tr>
    <tr>
     <th>5</th>
     <td class="black" id="a5" data-x="5" data-y="1"></td>
     <td class="white" id="b5" data-x="5" data-y="2"></td>
     <td class="black" id="c5" data-x="5" data-y="3"></td>
     <td class="white" id="d5" data-x="5" data-y="4"></td>
     <td class="black" id="e5" data-x="5" data-y="5"></td>
     <td class="white" id="f5" data-x="5" data-y="6"></td>
     <td class="black" id="g5" data-x="5" data-y="7"></td>
     <td class="white" id="h5" data-x="5" data-y="8"></td>
    </tr>
    <tr>
     <th>4</th>
     <td class="white" id="a4" data-x="4" data-y="1"></td>
     <td class="black" id="b4" data-x="4" data-y="2"></td>
     <td class="white" id="c4" data-x="4" data-y="3"></td>
     <td class="black" id="d4" data-x="4" data-y="4"></td>
     <td class="white" id="e4" data-x="4" data-y="5"></td>
     <td class="black" id="f4" data-x="4" data-y="6"></td>
     <td class="white" id="g4" data-x="4" data-y="7"></td>
     <td class="black" id="h4" data-x="4" data-y="8"></td>
    </tr>
    <tr>
     <th>3</th>
     <td class="black" id="a3" data-x="3" data-y="1"></td>
     <td class="white" id="b3" data-x="3" data-y="2"></td>
     <td class="black" id="c3" data-x="3" data-y="3"></td>
     <td class="white" id="d3" data-x="3" data-y="4"></td>
     <td class="black" id="e3" data-x="3" data-y="5"></td>
     <td class="white" id="f3" data-x="3" data-y="6"></td>
     <td class="black" id="g3" data-x="3" data-y="7"></td>
     <td class="white" id="h3" data-x="3" data-y="8"></td>
    </tr>
    <tr>
     <th>2</th>
     <td class="white" id="a2" data-x="2" data-y="1"></td>
     <td class="black" id="b2" data-x="2" data-y="2"></td>
     <td class="white" id="c2" data-x="2" data-y="3"></td>
     <td class="black" id="d2" data-x="2" data-y="4"></td>
     <td class="white" id="e2" data-x="2" data-y="5"></td>
     <td class="black" id="f2" data-x="2" data-y="6"></td>
     <td class="white" id="g2" data-x="2" data-y="7"></td>
     <td class="black" id="h2" data-x="2" data-y="8"></td>
    </tr>
    <tr>
     <th>1</th>
     <td class="black" id="a1" data-x="1" data-y="1"></td>
     <td class="white" id="b1" data-x="1" data-y="2"></td>
     <td class="black" id="c1" data-x="1" data-y="3"></td>
     <td class="white" id="d1" data-x="1" data-y="4"></td>
     <td class="black" id="e1" data-x="1" data-y="5"></td>
     <td class="white" id="f1" data-x="1" data-y="6"></td>
     <td class="black" id="g1" data-x="1" data-y="7"></td>
     <td class="white" id="h1" data-x="1" data-y="8"></td>
    </tr>
   </tbody>
  </table>
  </div>
 </div>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
$(function(){
    //creating figure
    figure('&#9812;', 'king', '{{ $king->x }}', '{{ $king->y }}', 'white'); //king
    figure('&#9813;', 'queen', '{{ $queen->x }}', '{{ $queen->y }}', 'black'); //queen
    //functions
    function figure(fig, type, x, y, color){
        $('<span>').html(fig)
        .attr('data-figure', type)
        .attr('data-x', x)
        .attr('data-y', y)
        .css('cursor', 'pointer')
        .on({
            'click' : draged
        })
        .appendTo('td[data-x="'+x+'"][data-y="'+y+'"]');
    };
    function draged(e){
        e.preventDefault();
        let figure = $(this).attr('data-figure');
        let x = $(this).attr('data-x');
        let y = $(this).attr('data-y');
        if(figure == 'queen'){
            move_queen(x, y);
        }
        if(figure == 'king'){
            move_king(x, y);
        }
    }
    function move_king(x, y){
        $('.green').empty();
        let x_plus = parseInt(x)+1;
        let x_minus = parseInt(x)-1;
        let y_plus = parseInt(y)+1;
        let y_minus = parseInt(y)-1;
        move_td('king', x_plus, y);
        move_td('king', x_minus, y);
        move_td('king', x, y_plus);
        move_td('king', x, y_minus);
        move_td('king', x_plus, y_plus);
        move_td('king', x_plus, y_minus);
        move_td('king', x_minus, y_plus);
        move_td('king', x_minus, y_minus);
    }
    function move_queen(x, y){
        $('.green').empty();
        let x_plus = parseInt(x)+1;
        let x_minus = parseInt(x)-1;
        let y_plus = parseInt(y)+1;
        let y_minus = parseInt(y)-1;
        move_td('queen', x_plus, y);
        move_td('queen', x_minus, y);
        move_td('queen', x, y_plus);
        move_td('queen', x, y_minus);
        move_td('queen', x_plus, y_plus);
        move_td('queen', x_plus, y_minus);
        move_td('queen', x_minus, y_plus);
        move_td('queen', x_minus, y_minus);
        move_td_queen('queen', x, y);
    }
    function move_td_queen(fig, x, y){ 
        for(iy=1;iy<9;iy++){
            move_td('queen', x, iy);
        }
        for(ix=1;ix<9;ix++){
            move_td('queen', ix, y);
        }
        for(i=1;i<9;i++){
            move_td('queen',parseInt(x)+i, parseInt(y)+i);
            move_td('queen',parseInt(x)-i, parseInt(y)-i);
            move_td('queen',parseInt(x)+i, parseInt(y)-i);
            move_td('queen',parseInt(x)-i, parseInt(y)+i);
        }
    }
    function move_td(fig, x, y){
        if(x>0&&x<9&&y>0&&y<9){
            let tt = $('td[data-x="'+x+'"][data-y="'+y+'"]');
            if( tt.is(':empty')){
                tt.addClass('green')
            .html('<span>+</span>')
            .on({
                'click':function(){
                    $.ajax({
                        type:'get',
                        url:'/ajax',
                        data:'figure='+fig+'&x='+x+'&y='+y,
                        success:function(data){
                            document.location.href='/';
                        },
                        error:function(msg){
                            console.log(msg);
                        }
                    })
                }
            });
            }
        }else{
            console.log(false);
        }
    }
});

    </script>
 </body>
</html>
