	.file	"cob4374_0.c"
	.comm	cob_unifunc,8,8
	.local	b_1
	.comm	b_1,4,16
	.section	.rodata
	.align 16
	.type	a_1, @object
	.size	a_1, 16
a_1:
	.byte	33
	.byte	0
	.byte	0
	.byte	0
	.zero	4
	.quad	0
.LC0:
	.string	"Hello, world"
	.data
	.align 16
	.type	c_1, @object
	.size	c_1, 24
c_1:
	.quad	12
	.quad	.LC0
	.quad	a_1
	.text
	.globl	hello
	.type	hello, @function
hello:
.LFB22:
	.cfi_startproc
	pushq	%rbp
	.cfi_def_cfa_offset 16
	.cfi_offset 6, -16
	movq	%rsp, %rbp
	.cfi_def_cfa_register 6
	movl	$0, %edi
	call	hello_
	popq	%rbp
	.cfi_def_cfa 7, 8
	ret
	.cfi_endproc
.LFE22:
	.size	hello, .-hello
	.section	.rodata
.LC1:
	.string	"1.1"
.LC2:
	.string	"hello.cob"
.LC3:
	.string	"hello"
	.text
	.type	hello_, @function
hello_:
.LFB23:
	.cfi_startproc
	pushq	%rbp
	.cfi_def_cfa_offset 16
	.cfi_offset 6, -16
	movq	%rsp, %rbp
	.cfi_def_cfa_register 6
	subq	$4128, %rsp
	movl	%edi, -4116(%rbp)
	movq	%fs:40, %rax
	movq	%rax, -8(%rbp)
	xorl	%eax, %eax
	movl	-4116(%rbp), %eax
	shrl	$31, %eax
	movzbl	%al, %eax
	testq	%rax, %rax
	je	.L4
	movl	initialized.7000(%rip), %eax
	testl	%eax, %eax
	jne	.L5
	movl	$0, %eax
	jmp	.L11
.L5:
	movl	$0, initialized.7000(%rip)
	movl	$0, %eax
	jmp	.L11
.L4:
	leaq	-4096(%rbp), %rax
	movq	%rax, -4104(%rbp)
	movq	-4104(%rbp), %rax
	movl	$0, (%rax)
	movq	cob_current_module(%rip), %rax
	movq	%rax, module.7002(%rip)
	movq	$module.7002, cob_current_module(%rip)
	movl	initialized.7000(%rip), %eax
	testl	%eax, %eax
	sete	%al
	movzbl	%al, %eax
	testq	%rax, %rax
	je	.L7
	movl	cob_initialized(%rip), %eax
	testl	%eax, %eax
	jne	.L8
	movl	$0, %edi
	call	cob_fatal_error
.L8:
	movl	$0, %edx
	movl	$.LC1, %esi
	movl	$.LC2, %edi
	call	cob_check_version
	movq	module.7002(%rip), %rax
	testq	%rax, %rax
	je	.L9
	movl	$hello_, %edx
	movl	$hello, %esi
	movl	$.LC3, %edi
	call	cob_set_cancel
.L9:
	movl	$b_1, %eax
	movl	$0, (%rax)
	movl	$1, initialized.7000(%rip)
.L7:
	movl	cob_call_params(%rip), %eax
	movl	%eax, cob_save_call_params(%rip)
	nop
.L10:
	movl	$c_1, %ecx
	movl	$1, %edx
	movl	$1, %esi
	movl	$0, %edi
	movl	$0, %eax
	call	cob_display
	movl	$b_1, %eax
	movl	(%rax), %eax
	movl	%eax, %edi
	call	cob_stop_run
.L11:
	movq	-8(%rbp), %rcx
	xorq	%fs:40, %rcx
	je	.L12
	call	__stack_chk_fail
.L12:
	leave
	.cfi_def_cfa 7, 8
	ret
	.cfi_endproc
.LFE23:
	.size	hello_, .-hello_
	.local	initialized.7000
	.comm	initialized.7000,4,4
	.data
	.align 32
	.type	module.7002, @object
	.size	module.7002, 48
module.7002:
	.quad	0
	.quad	0
	.quad	0
	.quad	0
	.quad	cob_user_parameters.7001
	.byte	0
	.byte	46
	.byte	36
	.byte	44
	.byte	1
	.byte	1
	.byte	1
	.byte	0
	.local	cob_user_parameters.7001
	.comm	cob_user_parameters.7001,512,32
	.ident	"GCC: (Ubuntu 5.3.1-14ubuntu2.1) 5.3.1 20160413"
	.section	.note.GNU-stack,"",@progbits
