<div class="wrap" id="ajax_search_container">
    <h1><?php esc_html_e('ساخت شورتکد', 'mo-ajax-search'); ?></h1>
    <form method="post">
        <table class="form-table">
            <tr>
                <th scope="row"><label
                        for="post_type_selector"><?php esc_html_e('انتخاب پست تایپ', 'mo-ajax-search'); ?></label></th>
                <td>
                    <select name="post_type" id="post_type_selector" class="regular-text">
                        <option value="post"><?php esc_html_e('نوشته‌ها', 'mo-ajax-search'); ?></option>
                        <?php if (class_exists('WooCommerce')) : ?>
                        <option value="product"><?php esc_html_e('محصولات', 'mo-ajax-search'); ?></option>
                        <?php endif; ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th scope="row"><label for="num_results"><?php esc_html_e('تعداد نتایج', 'mo-ajax-search'); ?></label>
                </th>
                <td>
                    <div class="number-input">
                        <button class="ajax-search-decrement"><span>-</span></button>
                        <input type="number" id="num_results" name="num_results" value="5" min="1" max="100"
                            class="small-text" />
                        <button class="ajax-search-increment"><span>+</span></button>
                    </div>
                </td>
            </tr>


            <tr>
                <th scope="row"><?php esc_html_e('نمایش تصویر', 'mo-ajax-search'); ?></th>
                <td><input type="checkbox" name="show_image" checked /></td>
            </tr>

            <tr>
                <th scope="row"><?php esc_html_e('نمایش توضیحات', 'mo-ajax-search'); ?></th>
                <td><input type="checkbox" name="show_description" checked /></td>
            </tr>

            <tr>
                <th scope="row"><?php esc_html_e('نمایش دسته‌بندی', 'mo-ajax-search'); ?></th>
                <td><input type="checkbox" id="show_category" name="show_category" checked /></td>
            </tr>

            <tr id="price_row" style="display:none;">
                <th scope="row"><?php esc_html_e('نمایش قیمت', 'mo-ajax-search'); ?></th>
                <td><input type="checkbox" id="show_price" name="show_price" /></td>
            </tr>
        </table>

        <p class="submit">
            <input type="submit" name="ajax_search_submit" id="submit" class="button button-primary"
                value="<?php echo esc_html__('ایجاد شورت کد', 'lite-shamsi') ?>">
            <?php wp_nonce_field('_wpnonce'); ?>
        </p>

    </form>

    <h2><?php esc_html_e('شورتکد تولید شده:', 'mo-ajax-search'); ?></h2>


    <div class="shortcode-display">
        <input type="text" id="generated_shortcode" class="regular-text" readonly
            value="<?php echo esc_attr($this->generate_simple_shortcode()); ?>">
        <button class="button button-secodary"
            id="copy_shortcode_btn"><?php esc_html_e('کپی شورت کد', 'mo-ajax-search'); ?></button>
        <span id="success_message" style="display: none; color: green;">کپی شد</span>
    </div>
</div>