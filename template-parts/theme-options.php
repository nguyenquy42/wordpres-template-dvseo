<div class="wrap">
<h1>Cấu hình Giao diện trang chủ LPTech</h1>
<form method="post" action="options.php">
    <?php settings_fields( 'lptech-themes-settings-group' ); ?>
    <?php do_settings_sections( 'lptech-themes-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Limit Post Block 1</th>
            <td><input type="text" name="new_option_number" value="<?=esc_attr( get_option('new_option_number') ); ?>" /></td>
        </tr>
        <tr>
        <th scope="row">add Số Dự Án Hoàn Thành</th>
            <td><input type="text" name="option_project_finish" value="<?=esc_attr( get_option('option_project_finish') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Dự Án Hoạt Động</th>
            <td><input type="text" name="option_project_avtive" value="<?=esc_attr( get_option('option_project_avtive') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Khách Hàng Hày Lòng</th>
            <td><input type="text" name="option_passenger_please" value="<?=esc_attr( get_option('option_passenger_please') ); ?>" /></td>
        </tr>
        <th scope="row">add Số Năm Kinh Nghiệm</th>
            <td><input type="text" name="option_years_experience" value="<?=esc_attr( get_option('option_years_experience') ); ?>" /></td>
        </tr>
   
    </table>
    <?php submit_button(); ?>
</form>
</div>