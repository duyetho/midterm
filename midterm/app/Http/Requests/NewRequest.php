<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'inputTitle'=>'required|max:255|string',
            'inputImage'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
            'inputDescription'=>'required|string',
            'inputDate'=>'required|date',
            'inputAuthor'=>'required|max:255|string'
        ];
    }
    public function messagess()
    {
        return[
            'inputTitle.string'=>'vui lòng nhập tên sản phẩm',
            'inputImage.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			'inputImage.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'inputImage.required'=>'Bạn chưa chọn ảnh',
            'inputImage.filled'=>'Bạn chưa chọn ảnh',
            'inputDescription.string'=>'vui lòng nhập mô tả',
            'inputDate.date'=>'vùi lòng nhập ngày tháng',
            'inputAuthor.string'=>'vui lòng nhập tên tác giả'
        ];
    }
}
