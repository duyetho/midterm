<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'inputName'=>'required|max:255|string',
            'inputPrice'=>'required|numeric|min:10000',
            'inputOldprice'=>'required|numeric|min:10000',
            'inpuTimage'=>'required|mimetypes:image/jpeg,image/png|mimes:jpeg,png|file_extension:jpeg,png|max:2048|filled',
            'inputDescription'=>'required|string',
        ];
    }
    public function messagess()
    {
        return[
            'inputName.string'=>'vui lòng nhập tên sản phẩm',
            'inpuTimage.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
			'inpuTimage.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            'inputPrice.numeric' =>'vui lòng nhập giá',
            'inputOldprice.numeric' =>'vui lòng nhập giá',
            'inpuTimage.required'=>'Bạn chưa chọn ảnh',
            'inpuTimage.filled'=>'Bạn chưa chọn ảnh',
            'inputDescription.string'=>'vui lòng nhập mô tả'
        ];
    }
}
