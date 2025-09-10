<main>
    <!-- =======================
  Main contain START -->
    <section class="py-4">
        <div class="container">
            <h1 class="mb-4 h3">ویرایش دسته بندی </h1>
            <div class="row pb-4 bg-light p-3 mb-4 rounded">
                <form action="#" method="post">
                    @csrf
                    @method('PUT')
                 <div class="row">
                     <div class="col-sm-12 col-md-4">
                         <label class="form-label">نام  </label>
                         <input name="name" type="text" class="form-control" placeholder="نام دست بندی ..." value="">
                         @error('name')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-4">
                         <label class="form-label">نامک</label>
                         <input name="slug" type="text" class="form-control" placeholder="  نامک ..." value="">
                         @error('slug')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-4 ">
                         <label class="form-label">توضیحات</label>
                         <textarea class="form-control" name="description" ></textarea>
                     </div>
                     <div class="col-sm-12 col-md-4 mt-3">
                         <label class="form-label">آیکون</label>
                         <select class="form-control" name="icon" >
                             <option value="⚽️" ⚽️ اخبار ورزشی</option>
                             <option value="🏀"  🏀</option>
                             <option value="🏈" >🏈 </option>
                             <option value="🎾" >🎾 </option>
                             <option value="🏛️" >🏛️ اخبار سیاسی</option>
                             <option value="🗳️" >🗳️ </option>
                             <option value="🌍" >🌍 </option>
                             <option value="📊" >📊 </option>
                             <option value="📈" >📈 اخبار اقتصادی </option>
                             <option value="💰" >💰</option>
                             <option value="📉" >📉</option>
                             <option value="🏦" >🏦</option>
                             <option value="💵" >💵</option>
                             <option value="🎨" >🎨 اخبار هنری </option>
                             <option value="🖼️" >🖼️</option>
                             <option value="🖌️" >🖌️</option>
                             <option value="🎭" >🎭</option>
                             <option value="🎬" >🎬</option>
                             <option value="🎭" >🎭 اخبار فرهنگی</option>
                             <option value="🎨" >🎨</option>
                             <option value="📚" >📚</option>
                             <option value="🎶" >🎶</option>
                             <option value="🕌" >🕌</option>
                             <option value="✈️" >✈️ اخبار گردشگری</option>
                             <option value="🌍" >🌍 </option>
                             <option value="🏖️" >🏖️ </option>
                             <option value="🗺️" >🗺️ </option>
                             <option value="🏕️" >🏕️ </option>
                             <option value="💻" >💻 اخبار فناوری و تکنولوژی</option>
                             <option value="📱" >📱 </option>
                             <option value="🔧" >🔧 </option>
                             <option value="🖥️" >🖥️ </option>
                             <option value="🚀" >🚀 </option>
                         </select>
                         @error('icon')
                         <small class="mt-2 d-inline-block text-danger">{{$message}}</small>
                         @enderror
                     </div>
                     <div class="col-sm-12 col-md-2 d-flex align-items-center mt-5">
                         <input class="btn btn-success w-100 m-0" type="submit" value="ثبت">
                     </div>
                 </div>
                </form>
            </div>
        </div>
    </section>
    <!-- =======================
    Main contain END -->
</main>
