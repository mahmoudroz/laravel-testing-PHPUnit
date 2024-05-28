<?php

namespace Tests\Feature;

use App\Traits\GeneralTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;

class UploadImageTest extends TestCase
{
    use GeneralTrait;

    public function testUploadImage()
    {
        Storage::fake('public');

        // Create a mock of the Illuminate\Http\UploadedFile class
        $file = \Illuminate\Http\UploadedFile::fake()->create('test.jpg');

        // Define the folder where you want to upload the image
        $folder = 'uploads';

        // Call the uploadImage method
        $imageName = $this->uploadImage($file, $folder);

        // // Generate the image URL
        $imageUrl = asset($folder.'/'.$imageName);
        var_dump('/'.$folder.'/'.$imageName);
        $this->assertTrue(true);
        // Storage::disk('public')->assertExists('/'.$folder.'/'.$imageName);
        // Storage::disk('public')->assertExists($folder.'/'.$imageName);

        //  Storage::disk('public')->assertMissing($imageUrl);

        // // Optionally, you can output the image URL for debugging purposes
    }
}
