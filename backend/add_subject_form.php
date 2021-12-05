<!-- 新增頁面 -->


    <form action="api/save_subject.php" method="POST" class="col-md-6 m-auto">

        <!-- 以陣列方式傳值 接收所有option選項 -->
        <label>問卷主題: <input type="text" name="subject"></label>
        <label class="list-group-item">選項一: <input type="text" name="options[]"></label>
        <label class="list-group-item">選項二: <input type="text" name="options[]"></label>
        <label class="list-group-item">選項三: <input type="text" name="options[]"></label>
        <label class="list-group-item">選項四: <input type="text" name="options[]"></label>
        <input type="submit" value="送出">
    </form>
