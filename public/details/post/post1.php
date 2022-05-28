<?php require_once('../../functions/index.php'); ?>

<?php 

    // @todo DBかなんかに格納して変数を直接書けるようにする
    $bool = '$bool';
    $int = '$int';
    $thissss = new stdClass();
    $thissss->bool = '$this->bool';

    $codes = [

        'aaaaa' => [
            'file_name' => 'path1/index.php',
            'code' => 

            <<<END
            <p>これはコードです。</p>
    
            <!-- コメントテスト commentComment -->
            <input name="" />
            <input name  =   "" >
            <a class="aaa" class='aaa' href   =   "">○○サイトに移動。文字数多めの見た目テスト文字数多めの見た目テスト文字数多めの見た目テスト</a>
            <h2 id='' >aiueo</h2>
    
            <p class="複数行文字列テスト
            複数行文字列テスト
            複数行文字列テスト複数行文字列テスト"></p>
    
            <p class='複数行文字列テスト
            複数行文字列テスト複数行文字列テスト
            複数行文字列テスト複数行文字列テスト'></p>
    
            <p class='aaaaa<?php echo 1111; ?>iiiii'></p>
            <p class='aaaaa<?= 1111; ?>iiiii'></p>
    
            <?php 
    
    
                /**
                 *  コメントテスト
                 *  コメントテスト1111です。
                 */
                function funcName(){
                    return 123456;
                }
    
                function func_name(int $int = 0): int
                {
                    return $int;
                }
    
    
    
                $bool = true;
    
                if( $bool ) {
                    echo 1111;
                }elseif( ! $bool ){
                    echo 2222;
                }
    
    
                namespace App\Http\ClassNameDesu;
                use path\path\ClassName;
    
                class ClassNameDesu extends SimpleClass
                {
                    private $bool = '';
                    
                    public function __constract(){
                        $thissss->bool = '22222';
                    }
                }
            ?>
    
            <script src="path/path/script.js"></script>
    
    
    
            /* commentCommentコメント コメント　*  \/ コメントテスト */
            .tabs li a{
                color:white;
                width:100%;
                margin:0 5px;
                padding:0 10px;
                border:1px solid gray;
            }
    
            main{
                background-color:gray;
                margin:10px 0;
            }
    
            #footer{
                background-color:#4f88ad;
            }
    
            #  footer   {
                background-color:#4f88ad;
            }
    
            body >  main  > .classclass ul   {
                background-color:#4f88ad;
            }
    
            @media screen and (max-width:700px){
                .pre_wrap_wrap{
                    width: 80%;
                }
            }
    
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            行番号とのずれテスト
            END,
        ],



        [
            'file_name' => 'path2/index.php',
            'code' =>
            <<<END
            <Label
            name="name"
            className="label"
            errorClassName="label error"
            />

            <TextField
            name="name"
            className="input"
            errorClassName="input error"
            validation={{ required: true }}
            />

            <FieldError
            name="name"
            className="error-message"
            />
            END,
        ],

        


        [
            'file_name' => 'path3/index.php',
            'code' =>
            <<<END
            const Routes = () => {
            return (
                <Router>
                <Set wrap={UserLayout}>
                    <Route path="/user/new" page={NewUserPage} name="newUser" />
                    <Route path="/user/{id:Int}/edit" page={UserPage} name="editUser" />
                    <Route path="/user/{id:Int}" page={UserPage} name="user" />
                </Set>
                <Route notfound page={NotFoundPage} />
                </Router>
            );
            };

            export default Routes;
            END,
        ],

        

    ];

    // 添字配列に変更
    $codes = array_values($codes);

    // 'code_key'追加
    foreach($codes as $key => $code){
        $codes[$key]['code_key'] = $key;
    }
    
?>



<!DOCTYPE html>
<html lang="<?= LANGUAGE; ?>">

    <?php getPartOnce(PUBLIC_DIR.'/parts/head.php'); ?>

    <body>
        <?php getPartOnce(PUBLIC_DIR.'/parts/header.php'); ?>


        <div id="main_container_wrap">
            <div class="main_container">
                <main>
                    <h1>投稿1タイトル</h1>

                    <div>
                        <nav>
                            <h2>目次</h2>
                            <ul>
                                <li>内容１</li>
                                <li>内容２</li>
                                <li>内容３</li>
                            </ul>
                        </nav>

                        <section>
                            <h3 id="">id自動付与予定1</h3>
                            <div>
                                <p>投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容</p>
                                <?php getPart(PUBLIC_DIR.'/parts/code.php', $codes[0]); ?>
                            </div>
                        </section>

                        <section>
                            <h3 id="">id自動付与予定2</h3>
                            <div>
                                <p>投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容</p>
                                <?php getPart(PUBLIC_DIR.'/parts/code.php', $codes[1]); ?>
                            </div>
                        </section>

                        <section>
                            <h3 id="">id自動付与予定3</h3>
                            <div>
                                <p>投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容投稿内容</p>
                                <?php getPart(PUBLIC_DIR.'/parts/code.php', $codes[2]); ?>
                            </div>
                        <section>
                    </div>
                </main>
            </div>

                
            
                

            
        </div>
        


        <?php getPartOnce(PUBLIC_DIR.'/parts/footer.php'); ?>

        <!-- @todo コールバック関数利用して</body>直前に出力予定 -->
        <script src="<?= '../../parts/code/code.js'; ?>"></script>

    </body>

</html>